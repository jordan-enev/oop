<?php

/**
 * Class ArticlesCollection
 */
class ArticlesCollection
{

    /**
     * Render articles by provided article parser
     *
     * @param ArticlesParser $parser
     */
    public static function render(ArticlesParser $parser)
    {
        $parser->parse();
        $articles = $parser->getAll();

        foreach ($articles as $article) {
            var_dump($article);
        }
    }

}