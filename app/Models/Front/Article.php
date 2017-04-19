<?php

namespace App\Models\Front;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    protected $guarded=null;
    protected $dates=['published_at'];

//我们将每篇文章的标题转换为slug值，并用它作为文章URI的一部分，这样可以使博客对搜索引擎更加友好。
    public function setTitleAttribute($value){
        $this->attributes['title']=$value;
        if(!$this->exists){
            $this->attributes['slug']=str_slug($value);
        }
    }

    public function setUserIdAttribute($value){
        $this->attributes['user_id']=Auth::id();
    }

    /**
     * 获取数据
     */
    public function user(){
      return $this-> belongsTo('App\User');
    }


}
