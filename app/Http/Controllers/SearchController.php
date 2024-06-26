<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class SearchController extends Controller
{
	public function search(Request $request){
		// Get the search value from the request
		$search = $request->input('search');
	
		// Search in the title and body columns from the posts table
		$posts = Buku::query()
			->where('judul', 'LIKE', "%{$search}%")
			->get();
	
		// Return the search view with the resluts compacted
		return view('search', compact('posts'));
	}
}
