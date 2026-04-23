<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the specified blog post.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Blog data configuration
        $blogs = [
            'cara-mendirikan-pt-yang-benar-sesuai-hukum-indonesia' => [
                'title' => 'Cara Mendirikan PT yang Benar Sesuai Hukum Indonesia',
                'category' => 'Hukum Bisnis',
                'date' => '14 April 2025',
                'views' => '3.241',
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f',
                'slug' => 'cara-mendirikan-pt-yang-benar-sesuai-hukum-indonesia'
            ],
            'hak-asuh-anak-pasca-perceraian' => [
                'title' => 'Hak Asuh Anak Pasca Perceraian: Apa yang Perlu Anda Ketahui?',
                'category' => 'Hukum Keluarga',
                'date' => '7 April 2025',
                'views' => '5.870',
                'image' => 'https://images.unsplash.com/photo-1511895426328-dc8714191300',
                'slug' => 'hak-asuh-anak-pasca-perceraian'
            ],
            'memahami-hak-tersangka-dalam-proses-penyidikan-pidana' => [
                'title' => 'Memahami Hak Tersangka dalam Proses Penyidikan Pidana',
                'category' => 'Hukum Pidana',
                'date' => '1 April 2025',
                'views' => '2.990',
                'image' => 'https://images.unsplash.com/photo-1589391886645-d51941baf7fb',
                'slug' => 'memahami-hak-tersangka-dalam-proses-penyidikan-pidana'
            ]
        ];

        // Check if blog exists
        if (!array_key_exists($slug, $blogs)) {
            abort(404);
        }

        // Get blog data
        $blog = $blogs[$slug];

        // Return view with blog data
        return view('partials.detailBlog', $blog);
    }
}
