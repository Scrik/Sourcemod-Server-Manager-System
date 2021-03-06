<?php

class Page extends Eloquent {

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'pages';

	/**
	* The fillable table columns.
	*
	* @var array
	*/
	protected $fillable = ['name', 'friendly_name', 'icon', 'slug'];

	/**
	* Using timestamps
	*
	* @var boolen
	*/
	public $timestamps = true;
	
	/**
	* Attach user table to many-to-many relationship with "Roles" table via the "page_role" pivot table.
	*
	*/
	public function roles()
	{
		return $this->belongsToMany('Role', 'page_role')->orderBy('id', 'asc')->withTimestamps();
	}

	/**
	* Each page can have many permissions attached to it (many-to-one).
	*
	*/
	public function permissions()
	{
		return $this->hasMany('Permission');
	}
}