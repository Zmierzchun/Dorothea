<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends Controller
{
    /**
     * @Route("/article/{id}", requirements={"id": "\d+"}, name="_getArticleById")
     *
     */
    public function getArticleByIdAction($id)
    {
        return $this->render('AppBundle:Article:show_article.html.twig', $this->showArticle(array('id' => $id)));
    }
    /**
     * @Route("/article/{slug}", defaults={"slug" = "Witamy"}, name="_getArticleBySlug")
     */
    public function getArticleBySlugAction($slug)
    {
        return $this->render('AppBundle:Article:show_article.html.twig', $this->showArticle(array('slug' => $slug)));
    }

    /**
     * @param $tag
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/article/tag/{tag}", name="_listArticlesByTag")
     */

    public function listArticlesByTagAction($tag)
    {
        return $this->render('AppBundle:Article:list_articles.html.twig', $this->listArticlesByTag($tag));
    }

    /**
     * @param $tag
     * @return array
     */
    private function listArticlesByTag($tag)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Tag');
        $data = $repo->findByName($tag);
        foreach ($data as $i => $item) {
            $articlesObj = $item->getArticles();
            foreach ($articlesObj as $index => $article) {
                $artArr[$index]['title'] = $article->getTitle();
                $artArr[$index]['description'] = $article->getDescription();
                $artArr[$index]['slug'] = $article->getSlug();
            }
        }
        if (!isset($artArr)) {
            $artArr = null;
        }
        return array(
            'key' => $tag,
            'locale' => 'pl',
            'description' => null,
            'author' => null,
            'list' => $artArr,
        );
    }

    /**
     * @param $params
     * @return array
     *
     * Describe function actions.
     */
    private function showArticle($params)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Article');
        $article = $repo->findOneBy($params);

        $tagsObj = $article->getTags();
        foreach ($tagsObj as $i => $tag) {
            $tags[$i]['name'] = $tag->getName();
            $tags[$i]['description'] = $tag->getDescription();
        }

        $childrenObj = $article->getChildren();
        foreach ($childrenObj as $j => $child) {
            $children[$j]['title'] = $child->getTitle();
            $children[$j]['slug'] = $child->getSlug();
        }
        if (!isset($tags)){
            $tags = null;
        }
        if (!isset($children)){
            $children = null;
        }
        return array(
            'title' => $article->getTitle(),
            'locale' => 'pl',
            'tags' => $tags,
            'description' => $article->getDescription(),
            'content' => $article->getContent(),
            'modified' => $article->getModified(),
            'children' => $children,
            'author' => null,
        );

    }

}
