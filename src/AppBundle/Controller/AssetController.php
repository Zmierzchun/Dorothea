<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Asset;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AssetController extends Controller
{
    /**
     * @Route("/media/{id}", requirements={"id": "\d+"}, name="_getAssetById")
     *
     */
    public function getAssetByIdAction($id)
    {
        return $this->render('AppBundle:Asset:show_asset.html.twig', $this->showAsset(array('id' => $id)));
    }

    /**
     * @Route("/media/{slug}", name="_getAssetBySlug")
     *
     */
    public function getAssetByNameAction($slug)
    {
        return $this->render('AppBundle:Asset:show_asset.html.twig', $this->showAsset(array('slug' => $slug)));
    }

    /**
     * @Route("/media/{contentType}/{tag}", name="_listAssetsByTag")
     *
     */
    public function listAssetsByTagAction($tag,$contentType)
    {
        $data = $this->listAssetsByTag($tag,$contentType);
        return $this->render('AppBundle:Asset:list_assets.html.twig', $data);
    }

    /**
     *
     * @Route("/media/add/{contentType}/", name="_addAsset")

     */
    private function addAssetAction($params){



    }

    //****************************************************************************************************************//
    private function listAssetsByTag($tag, $contentType)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Tag');

        //find a tag of name given in param in repository
        $data = $repo->findByName($tag);

        //decomposite object into separate asset objects
        foreach ($data as $item) {
            $assetsObj = $item->getAssets();

            //decomposite asset objects into separate fields and values.
            foreach ($assetsObj as $index => $asset) {
                $assetCt = $asset->getContentType();  //check if content type fits to second param

               if($assetCt->getName() == $contentType || $contentType == 'any') {
                   $assetArr[$index]['title'] = $asset->getTitle();
                   $assetArr[$index]['description'] = $asset->getDescription();
                   $assetArr[$index]['slug'] = $asset->getSlug();
               }
            }
        }

        if (!isset($assetArr)) {
            $assetArr = null;
        }
       
        return array(
            'key' => $tag,
            'locale' => 'pl',
            'description' => null,
            'author' => null,
            'list' => $assetArr,
            'contentType' => $contentType,
        );
    }

    private function showAsset($params)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Asset');
        $asset = $repo->findOneBy($params);

        $tagsObj = $asset->getTags();
        foreach ($tagsObj as $i => $tag) {
            $tags[$i]['name'] = $tag->getName();
            $tags[$i]['description'] = $tag->getDescription();
        }

        $childrenObj = $asset->getChildren();
        foreach ($childrenObj as $j => $child) {
            $children[$j]['title'] = $child->getTitle();
            $children[$j]['slug'] = $child->getSlug();
        }

        $ctObj = $asset->getContentType();
        $contentType = $ctObj->getName();

        if (!isset($tags)){
            $tags = null;
        }
        if (!isset($children)){
            $children = null;
        }

        $data = array(
            'title' => $asset->getTitle(),
            'locale' => 'pl',
            'tags' => $tags,
            'description' => $asset->getDescription(),
            'link' => $asset->getLink(),
            'modified' => $asset->getModified(),
            'children' => $children,
            'contentType' => $contentType,
            'author' => null,
        );
        return $data;

    }
}
