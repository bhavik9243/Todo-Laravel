<?php

namespace App\Http\Controllers;

use App\PasteLink;
use Illuminate\Http\Request;
use App\Http\Requests;

class LinkController extends Controller
{
    public function pastelink()
    {
        $links = PasteLink::orderBy('created_at', 'asc')->get();
    	return view('pastelink', [
            'links' => $links,
        ]);
    }

    public function postLink(Request $request)
    {
    	$this->validate($request, [
    		'pastelink_name' => 'required|max:255',
    		'download_link' => 'required|max:255'
    	]);

    	$pastelink_name = $request['pastelink_name'];
    	$download_link = $request['download_link'];

    	$pastelink = new PasteLink();

    	$pastelink->pastelink_name = $pastelink_name;
    	$pastelink->download_link = $download_link;

    	$pastelink->save();

    	return redirect()->route('pastelink');
    }

    public function postDelete(Request $request)
    {
        $link_delete = $request->link_delete;

        $delete = PasteLink::where('pastelink_id', $link_delete);

        $delete->delete();

        return redirect()->route('pastelink');
    }
}
