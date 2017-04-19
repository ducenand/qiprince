<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('aid');
            //我们将每篇文章的标题转换为slug值，并用它作为文章URI的一部分，这样可以使博客对搜索引擎更加友好。
            $table->string('slug')->unique();
            $table->text('content')->comment('文章正文');
            $table->integer('user_id')->references('id')->on('users')->comment('所属用户');
            $table->integer('cid')->default(0)->comment('所属栏目');
            $table->string('cover_img_url')->comment('封面图片地址');
            $table->string('keywords')->default('')->comment('关键字');
            $table->char('title')->nullable()->unique('title')->comment('文章标题');
            $table->string('description')->default('')->comment('描述');

            $table->tinyInteger('is_lock')->default(0)->comment('描述');
            $table->timestamp('published_at')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
