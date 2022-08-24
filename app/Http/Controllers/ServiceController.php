<?php

namespace App\Http\Controllers;

use App\Models\ProductAccordion;
use App\Models\ProductAccordionImage;
use App\Models\ProductAccordionTag;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceImage;

class ServiceController extends Controller
{
    //
    public function show($slug){
        $product=array();
        $temp= Service::select('id', 'description','title1','title2')->where('url', $slug)->first();
        if($temp){
        $id=$temp->id;
        $product['description']=$temp->description;
        $product['title1']=$temp->title1;
        $product['title2']=$temp->title2;
        $product['imgs']= ServiceImage::where('service_id', $id)->pluck('image')->toArray();
        $temp=ProductAccordion::where('service_id',$id)->get();
        $acc=array();
        $product['acc']=array();
        foreach($temp as $t){
            $id=$t->id;
            $acc['title']= $t->title;
            $imgs=ProductAccordionImage::where('product_accordion_id',$id)->pluck('image')->toArray();
            $tags=ProductAccordionTag::select(['tag','value'])->where('product_accordion_id',$id)->get()->toArray();
            $acc['imgs']=$imgs;
            $acc['tags']=$tags;
            array_push($product['acc'],$acc);
        }
        return view('product',['product'=>$product]);
        }
        else{
            return view("errors.404");
        }
    }
}
