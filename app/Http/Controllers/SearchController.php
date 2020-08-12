<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Friend;

class SearchController extends Controller
{

	
	public function trangtimkiem()
	{
		return view('frontend.ketquatimkiem');
		
	}

	public function search(Request $request)
	{

		$keyword=$request->search;
		if ($request->ajax()) {
			$output = '';
			$friend=Friend::select('user_id_2','user_id_1')->Where('approved',0)->get();
			$result=DB::select("select * from users where  users.habit LIKE '%".$request->search."%' and users.role=0 and users.id!=".Auth::id()." and users.id not in(select
				friends.user_id_1 as fr 

				FROM
				friends
				WHERE
				friends.user_id_2 = ".Auth::id()." and friends.approved=1 

				union

				SELECT
				friends.user_id_2 as fr 


				FROM
				friends
				WHERE
				friends.user_id_1 = ".Auth::id()." and friends.approved=1
			)");

			foreach ($result as $key => $value) {
				if (strpos($value->img, 'img/') !== false)
				{
					$img='frontend/'. $value->img;
				}
				else
				{
					$img=$value->img;
				}

				if($friend->where('user_id_2',Auth::id())->where('user_id_1',$value->id)->count('user_id_2')>0)
				{ 
					$btn="Đồng ý";
				}
				else if($friend->where('user_id_2',$value->id)->where('user_id_1',Auth::id())->count('user_id_2')>0)
				{ 
					$btn="Đã gửi";
				}
				else
				{ 
					$btn="Kết bạn";
				}

				$output .= '<tr>
				<td>' .'<img src='.$img.' width="100" height="100"' .'>'. '</td>
				<td>' . $value->name . '</td>
				<td>' . $value->job . '</td>
				<td>' . $value->intro . '</td>
				<td>' . $value->habit . '</td>
				<td>' . $value->findlove . '</td>
				<td>' . '<button class="btn btn-outline-info sm-1 bt" onclick="test(event)" id="'.$value->id.'" >'.$btn.'</button>'
				. '</td>
				</tr>'; 
			}
			

			return Response($output);
		}

	}


	public function searchtrangchu(Request $request)
	{
		if($request->ajax())
		{
			$friend=Friend::select('user_id_2','user_id_1')->Where('approved',0)->get();
			$output = '';
			$result=DB::select("select * from users where  users.name LIKE '%".$request->search."%' and users.role=0 and users.id!=".Auth::id()." and users.id not in(select
				friends.user_id_1 as fr 

				FROM
				friends
				WHERE
				friends.user_id_2 = ".Auth::id()." and friends.approved=1 

				union

				SELECT
				friends.user_id_2 as fr 


				FROM
				friends
				WHERE
				friends.user_id_1 = ".Auth::id()." and friends.approved=1
			)");


			foreach ($result as $value) 
			{
				if (strpos($value->img, 'img/') !== false)
				{
					$img='frontend/'. $value->img;
				}
				else
				{
					$img=$value->img;
				}

				if($friend->where('user_id_2',Auth::id())->where('user_id_1',$value->id)->count('user_id_2')>0)
				{ 
					$btn="Đồng ý";
				}
				else if($friend->where('user_id_2',$value->id)->where('user_id_1',Auth::id())->count('user_id_2')>0)
				{ 
					$btn="Đã gửi";
				}
				else
				{ 
					$btn="Kết bạn";
				}

				$output .= '<div class="media  float-left rounded  " style="background-color: white; border: 1px solid pink; width: 70%" >
				<div class="media-left mt-1 mb-1" >
				<a href="/chitietcanhan/'.$value->id.'">'.'<img src="'.$img.'" class="testimonial-img" alt=""></a>
				</div>
				<div class="media-body">
				<p class="name mt-4" ><a href="/chitietcanhan/'.$value->id.'">'.$value->name.'</a></p>
				</div>
				</div>';
			}

			return Response($output);

		}

	}
}
