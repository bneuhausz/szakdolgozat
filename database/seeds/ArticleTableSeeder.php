<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new \App\Article();
        $article->title_hu = "Article1_hu";
        $article->title_en = "Article1_en";
        $article->body_hu = "texttexttexttexttexttexttexttexttexttexttext_hu";
        $article->body_en = "texttexttexttexttexttexttexttexttexttexttext_en";
        $article->save();

        $article = new \App\Article();
        $article->title_hu = "Article2_hu";
        $article->title_en = "Article2_en";
        $article->body_hu = "texttexttexttexttexttexttexttexttexttexttext_hu";
        $article->body_en = "texttexttexttexttexttexttexttexttexttexttext_en";
        $article->save();

        $article = new \App\Article();
        $article->title_hu = "Article3_hu";
        $article->title_en = "Article3_en";
        $article->body_hu = "texttexttexttexttexttexttexttexttexttexttext_hu";
        $article->body_en = "texttexttexttexttexttexttexttexttexttexttext_en";
        $article->save();
    }
}
