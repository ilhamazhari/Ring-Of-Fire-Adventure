<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    public function index()
    {
      $content = Content::All();

      return view('webmanager.content',['content' => $content]);
    }

    public function show()
    {
      return redirect()->back();
    }

    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required',
        'type' => 'required',
        'content' => 'required',
      ]);

      $content = new Content;
      $detail = $this->contentImage($request->content);

      if($request->hasfile('imageheading')){
        $name = $request->imageheading->getClientOriginalName();
        $newName = date('Ymd') . '-' . $name;
        $path = public_path('/images/content/');

        $request->imageheading->move($path, $newName);
        $content->imageheading = $newName;
      }
      
      
      $content->title = $request->title;
      $content->type = $request->type;
      $content->content = $detail;
      $content->tags = $request->tags;
      $content->save();

      return redirect()->back()->with('success', 'Content added successfully!');
    }

    public function edit(Content $content)
    {
      return response()->json($content);
    }

    public function update(Request $request,Content $content)
    {
      $request->validate([
        'title' => 'required',
        'type' => 'required',
        'content' => 'required',
      ]);

      $detail = $this->contentImage($request->content);

      $content->update([
        'title' => $request->title,
        'type' => $request->type,
        'content' => $detail,
        'tags' => $request->tags,
      ]);

      return redirect()->back()->with('success', 'Content updated successfully');
    }

    public function destroy(Content $content)
    {
      $this->destroyContentImage($content->content);
      $content->delete();

      return redirect()->back();
    }

    function contentImage($content)
    {
      $dom = new \DOMDocument();
      $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getElementsByTagName('img');

      foreach($images as $image => $img)
      {
        $data = $img->getattribute('src');
        $name = $img->getattribute('data-filename');

        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);

        $data = base64_decode($data);

        $imageName = 'images/content/' . date('Ymd') . '-' . $name . '.jpg';
        $path = public_path() . '/' . $imageName;

        file_put_contents($path, $data);
        $host = url('/');

        $img->removeattribute('src');
        $img->setattribute('src', $host . '/' . $imageName);
      }

      $detail = $dom->savehtml();

      return $detail;
    }

    function destroyContentImage($content)
    {
      $dom = new \DOMDocument();
      $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getElementsByTagName('img');

      foreach($images as $image => $img)
      {
        $data = $img->getattribute('src');

        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',' , $data);

        $data = base64_decode($data);

        $path = public_path() . '/images/content' . $imageName . '.jpg';

        if(File::exists($path)){
          File::delete($path);
        }
      }
    }
}
