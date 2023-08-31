<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'author', 'excerpt', 'body'];
    protected $guarded = ['id'];
}
// Post::create([
//     'title'=>'Judul ketiga',
//     'slug'=>'judul-ketiga',
//     'author'=>'Uki ',
//     'excerpt'=>'dolore sunt ea totam rerum dolor itaque molestiae nobis nisi tempore',
//     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sed omnis nihil molestias, illum provident, inplaceat ab perspiciatis repellat animi consequuntur hic impedit laudantium. Doloribus optio saepe temporibus indolore sunt ea totam rerum dolor itaque molestiae nobis nisi tempore,</p><p> esse et repudiandae porro nemo quas. Non culpa tempora nobis quos libero perspiciatis esse architecto quisquam est, dignissimos, id suscipit ad hic perferendisfuga repellat deserunt excepturi iste veritatis! Voluptatem non vel iusto fugiat eaque aut eum alias illo labore quibusdam libero sunt cum nam incidunt commodi laudantium, quam delectus nostrum</p><p>veniam est deleniti? Quocupiditate suscipit laudantium culpa? Sunt maiores, fuga voluptatem natus culpa nesciunt nulla autem quisquam? Optio quam, magni beatae deserunt sit distinctio voluptas sint illum sequi voluptates alias. Recusandae pariatur in aliquid a sed officia quidem vitae possimus illo, blanditiis accusantium cupiditate rem beatae quam distinctio doloremque repudiandae quos soluta at amet eaque magni! Sit?</p>'
// ])

// Post::where('title','Judul Pertama')->update(['title'=>'Judul Kelima Diganti'])