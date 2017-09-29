<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-7XZL-jumbo-v2-290x370-1.jpg',
            'title' => 'Game of Thrones',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'category' => 'Fantasy',
            'price' => 19,
            'publisher' => 'Pearson',
            'year' => 2012,
            'pages' => 150,
            'language' => 'English'
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-9THC-jumbo-v2-290x370.jpg',
            'title' => 'Silence Once Begun',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'category' => 'Romance',
            'price' => 7,
            'publisher' => 'Pearson',
            'year' => 2005,
            'pages' => 300,
            'language' => 'English'
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-7XZL-jumbo-v2-290x370-1.jpg',
            'title' => 'The Beauty and The Beast',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'category' => 'Family',
            'price' => 12,
            'publisher' => 'Publica',
            'year' => 2015,
            'pages' => 252,
            'language' => 'Romanian'
        ]);
        $product->save();
      
        $product = new \App\Product([
            'imagePath' => 'http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-ES87-jumbo-v2-290x370.jpg',
            'title' => 'Into the War',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'category' => 'History',
            'price' => 11,
            'publisher' => 'Trei',
            'year' => 2016,
            'pages' => 142,
            'language' => 'Romanian'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-0LUL-jumbo-v2-290x370.jpg',
            'title' => 'The Third Plate',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'category' => 'Action',
            'price' => 9,
            'publisher' => 'BBC',
            'year' => 2017,
            'pages' => 300,
            'language' => 'English' 
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-R7HN-jumbo-v2-290x370.jpg',
            'title' => 'The Silent History',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'category' => 'Adventure',
            'price' => 10,
            'publisher' => 'RELX Group',
            'year' => 2014,
            'pages' => 100,
            'language' => 'English'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://mcdn.elefant.ro/mnresize/300/414/images/31/273531/made-in-sweden_1_fullsize.jpg',
            'title' => 'Made in Sweeden',
            'description' => 'The next generation of architectural design is moving outside the box. Robotic arms are beginning to replace and advance now common digital fabrication technologies. Six-axis robots are showing the way to non-linear workflows, interactive interfaces, tools, and material technologies that can radically alter the established process of how we design and build space, offering a new paradigm for architecture. This book has three central sections: Techniques, which sets out the fields and the thinking that underlie the new uses for robotics; Projects, offering detailed presentations that explore through prototypes and working models how these principles can be applied and augmented; and Platforms, which presents the working tools used for this new genre of improvisational robotics through specially drawn technical illustrations.',
            'category' => 'Adventure',
            'price' => 8,
            'publisher' => 'Trei',
            'year' => 2015,
            'pages' => 100,
            'language' => 'English'
        ]);
        $product->save();
    }
}
