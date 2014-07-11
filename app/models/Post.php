<?php

class Post extends BaseModel
{
	//comment here what db this model relates to.
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    //validation rules for our model properties.
    static public $rules = 
    [
    	'title' => 'required|max:100',
    	'body'  => 'required|max:10000'
    ];

    public function user()
	{
	    return $this->belongsTo('User');
	}

    public function addUploadedImage($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';

        $imageName = $this->id . '-' . $image->getClientOriginalName();

        $image->move($systemPath, $imageName);

        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

    public function renderBody()
    {
        $dirtyHTML = Parsedown::instance()->parse($this->body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($dirtyHTML);
    }

    

    public function setSlugAttribute($value)
    {
        $value = str_replace(' ','_', trim($this->title));
        $this->attributes['slug'] = strtolower($value);
    }
}