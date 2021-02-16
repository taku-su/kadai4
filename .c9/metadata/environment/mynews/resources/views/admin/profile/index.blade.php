{"filter":false,"title":"index.blade.php","tooltip":"/mynews/resources/views/admin/profile/index.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":37,"column":50},"end":{"row":37,"column":51},"action":"remove","lines":["文"],"id":55},{"start":{"row":37,"column":49},"end":{"row":37,"column":50},"action":"remove","lines":["本"]}],[{"start":{"row":37,"column":49},"end":{"row":37,"column":53},"action":"insert","lines":["自己紹介"],"id":56}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"remove","lines":["5"],"id":57}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"insert","lines":["2"],"id":58}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"remove","lines":["5"],"id":59}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"insert","lines":["2"],"id":60}],[{"start":{"row":37,"column":44},"end":{"row":37,"column":45},"action":"remove","lines":["5"],"id":61}],[{"start":{"row":37,"column":44},"end":{"row":37,"column":45},"action":"insert","lines":["2"],"id":62}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"remove","lines":["2"],"id":63}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"insert","lines":["1"],"id":64}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"remove","lines":["2"],"id":65}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"insert","lines":["1"],"id":66}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"remove","lines":["2"],"id":67}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"insert","lines":["1"],"id":68}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"remove","lines":["1"],"id":69}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"insert","lines":["2"],"id":70}],[{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"insert","lines":["2"],"id":71}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"remove","lines":["1"],"id":72}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"remove","lines":["1"],"id":73}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"insert","lines":["2"],"id":74}],[{"start":{"row":37,"column":44},"end":{"row":37,"column":45},"action":"remove","lines":["2"],"id":75}],[{"start":{"row":37,"column":44},"end":{"row":37,"column":45},"action":"insert","lines":["3"],"id":76}],[{"start":{"row":0,"column":0},"end":{"row":56,"column":11},"action":"remove","lines":["@extends('layouts.admin')","@section('title', '登録済みのプロフィール')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <h2>プロフィール一覧</h2>","        </div>","        <div class=\"row\">","            <div class=\"col-md-4\">","                <a href=\"{{ action('Admin\\ProfileController@add') }}\" role=\"button\" class=\"btn btn-primary\">新規作成</a>","            </div>","            <div class=\"col-md-8\">","                <form action=\"{{ action('Admin\\ProfileController@index') }}\" method=\"get\">","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-8\">","                            <input type=\"text\" class=\"form-control\" name=\"cond_title\" value=\"{{ $cond_title }}\">","                        </div>","                        <div class=\"col-md-2\">","                            {{ csrf_field() }}","                            <input type=\"submit\" class=\"btn btn-primary\" value=\"検索\">","                        </div>","                    </div>","                </form>","            </div>","        </div>","        <div class=\"row\">","            <div class=\"list-news col-md-12 mx-auto\">","                <div class=\"row\">","                    <table class=\"table table-dark\">","                        <thead>","                            <tr>","                                <th width=\"10%\">ID</th>","                                <th width=\"20%\">名前</th>","                                 <th width=\"20%\">性別</th>","                                 <th width=\"20%\">趣味</th>","                                 <th width=\"30%\">自己紹介</th>","                            </tr>","                        </thead>","                        <tbody>","                            @foreach($posts as $news)","                                <tr>","                                    <th>{{ $news->id }}</th>","                                    <td>{{ \\Str::limit($news->name, 100) }}</td>","                                    <td>{{ \\Str::limit($news->gender, 100) }}</td>","                                    <td>{{ \\Str::limit($news->hobby, 100) }}</td>","                                    <td>{{ \\Str::limit($news->introduction, 150) }}</td>","                                </tr>","                            @endforeach","                        </tbody>","                    </table>","                </div>","            </div>","        </div>","    </div>","@endsection"],"id":77}],[{"start":{"row":0,"column":0},"end":{"row":58,"column":11},"action":"insert","lines":["@extends('layouts.front')","","@section('content')","    <div class=\"container\">","        <hr color=\"#c0c0c0\">","        @if (!is_null($headline))","            <div class=\"row\">","                <div class=\"headline col-md-10 mx-auto\">","                    <div class=\"row\">","                        <div class=\"col-md-6\">","                            <div class=\"caption mx-auto\">","                                <div class=\"image\">","                                    @if ($headline->image_path)","                                        <img src=\"{{ asset('storage/image/' . $headline->image_path) }}\">","                                    @endif","                                </div>","                                <div class=\"title p-2\">","                                    <h1>{{ str_limit($headline->title, 70) }}</h1>","                                </div>","                            </div>","                        </div>","                        <div class=\"col-md-6\">","                            <p class=\"body mx-auto\">{{ str_limit($headline->body, 650) }}</p>","                        </div>","                    </div>","                </div>","            </div>","        @endif","        <hr color=\"#c0c0c0\">","        <div class=\"row\">","            <div class=\"posts col-md-8 mx-auto mt-3\">","                @foreach($posts as $post)","                    <div class=\"post\">","                        <div class=\"row\">","                            <div class=\"text col-md-6\">","                                <div class=\"date\">","                                    {{ $post->updated_at->format('Y年m月d日') }}","                                </div>","                                <div class=\"title\">","                                    {{ str_limit($post->title, 150) }}","                                </div>","                                <div class=\"body mt-3\">","                                    {{ str_limit($post->body, 1500) }}","                                </div>","                            </div>","                            <div class=\"image col-md-6 text-right mt-4\">","                                @if ($post->image_path)","                                    <img src=\"{{ asset('storage/image/' . $post->image_path) }}\">","                                @endif","                            </div>","                        </div>","                    </div>","                    <hr color=\"#c0c0c0\">","                @endforeach","            </div>","        </div>","    </div>","    </div>","@endsection"],"id":78}],[{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["\""],"id":79}],[{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["\""],"id":80}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["\""],"id":81}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["\""],"id":82}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["#"],"id":83}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["#"],"id":84}],[{"start":{"row":11,"column":31},"end":{"row":15,"column":38},"action":"remove","lines":[" <div class=\"image\">","                                    @if ($headline->image_path)","                                        <img src=\"{{ asset('storage/image/' . $headline->image_path) }}\">","                                    @endif","                                </div>"],"id":85}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"remove","lines":[" "],"id":86}],[{"start":{"row":10,"column":57},"end":{"row":11,"column":30},"action":"remove","lines":["","                              "],"id":87}],[{"start":{"row":12,"column":68},"end":{"row":12,"column":69},"action":"remove","lines":["e"],"id":88},{"start":{"row":12,"column":67},"end":{"row":12,"column":68},"action":"remove","lines":["l"]},{"start":{"row":12,"column":66},"end":{"row":12,"column":67},"action":"remove","lines":["t"]},{"start":{"row":12,"column":65},"end":{"row":12,"column":66},"action":"remove","lines":["i"]},{"start":{"row":12,"column":64},"end":{"row":12,"column":65},"action":"remove","lines":["t"]}],[{"start":{"row":12,"column":64},"end":{"row":12,"column":65},"action":"insert","lines":["n"],"id":89},{"start":{"row":12,"column":65},"end":{"row":12,"column":66},"action":"insert","lines":["a"]},{"start":{"row":12,"column":66},"end":{"row":12,"column":67},"action":"insert","lines":["m"]},{"start":{"row":12,"column":67},"end":{"row":12,"column":68},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["e"],"id":90},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"remove","lines":["l"]},{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"remove","lines":["t"]},{"start":{"row":11,"column":45},"end":{"row":11,"column":46},"action":"remove","lines":["i"]},{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"remove","lines":["t"]}],[{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"insert","lines":[" "],"id":91}],[{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"remove","lines":[" "],"id":92}],[{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"insert","lines":["n"],"id":93},{"start":{"row":11,"column":45},"end":{"row":11,"column":46},"action":"insert","lines":["a"]},{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"insert","lines":["m"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":30},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":94},{"start":{"row":19,"column":0},"end":{"row":19,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":19,"column":24},"end":{"row":21,"column":30},"action":"insert","lines":["<div class=\"col-md-6\">","                            <p class=\"body mx-auto\">{{ str_limit($headline->body, 650) }}</p>","                        </div>"],"id":95}],[{"start":{"row":21,"column":30},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":96},{"start":{"row":22,"column":0},"end":{"row":22,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":22,"column":24},"end":{"row":24,"column":30},"action":"insert","lines":["<div class=\"col-md-6\">","                            <p class=\"body mx-auto\">{{ str_limit($headline->body, 650) }}</p>","                        </div>"],"id":97}],[{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"remove","lines":["y"],"id":98},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"remove","lines":["d"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"remove","lines":["o"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"remove","lines":["b"]}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["g"],"id":99},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["e"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["n"]},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["d"]},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"insert","lines":["r"],"id":100}],[{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"remove","lines":["y"],"id":101},{"start":{"row":17,"column":80},"end":{"row":17,"column":81},"action":"remove","lines":["d"]},{"start":{"row":17,"column":79},"end":{"row":17,"column":80},"action":"remove","lines":["o"]},{"start":{"row":17,"column":78},"end":{"row":17,"column":79},"action":"remove","lines":["b"]}],[{"start":{"row":17,"column":78},"end":{"row":17,"column":79},"action":"insert","lines":["g"],"id":102},{"start":{"row":17,"column":79},"end":{"row":17,"column":80},"action":"insert","lines":["e"]},{"start":{"row":17,"column":80},"end":{"row":17,"column":81},"action":"insert","lines":["n"]},{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"insert","lines":["d"]},{"start":{"row":17,"column":82},"end":{"row":17,"column":83},"action":"insert","lines":["e"]},{"start":{"row":17,"column":83},"end":{"row":17,"column":84},"action":"insert","lines":["r"]}],[{"start":{"row":17,"column":87},"end":{"row":17,"column":88},"action":"remove","lines":["5"],"id":103},{"start":{"row":17,"column":86},"end":{"row":17,"column":87},"action":"remove","lines":["6"]}],[{"start":{"row":17,"column":86},"end":{"row":17,"column":87},"action":"insert","lines":["7"],"id":104}],[{"start":{"row":20,"column":83},"end":{"row":20,"column":84},"action":"remove","lines":["5"],"id":105},{"start":{"row":20,"column":82},"end":{"row":20,"column":83},"action":"remove","lines":["6"]}],[{"start":{"row":20,"column":82},"end":{"row":20,"column":83},"action":"insert","lines":["1"],"id":106},{"start":{"row":20,"column":83},"end":{"row":20,"column":84},"action":"insert","lines":["0"]}],[{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"remove","lines":["y"],"id":107},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"remove","lines":["d"]},{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"remove","lines":["o"]},{"start":{"row":20,"column":76},"end":{"row":20,"column":77},"action":"remove","lines":["b"]}],[{"start":{"row":20,"column":76},"end":{"row":20,"column":77},"action":"insert","lines":["h"],"id":108},{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"insert","lines":["o"]},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"insert","lines":["b"]},{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"insert","lines":["b"]},{"start":{"row":20,"column":80},"end":{"row":20,"column":81},"action":"insert","lines":["y"]}],[{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"remove","lines":["y"],"id":109},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"remove","lines":["d"]},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"remove","lines":["o"]},{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"remove","lines":["b"]}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["h"],"id":110},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["o"]}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":40},"action":"remove","lines":["ho"],"id":111},{"start":{"row":20,"column":38},"end":{"row":20,"column":43},"action":"insert","lines":["hobby"]}],[{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"remove","lines":["y"],"id":112},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"remove","lines":["d"]},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"remove","lines":["o"]},{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"remove","lines":["b"]}],[{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"insert","lines":["i"],"id":113},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"insert","lines":["n"]},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"insert","lines":["t"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"insert","lines":["r"]},{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"insert","lines":["o"]}],[{"start":{"row":23,"column":43},"end":{"row":23,"column":44},"action":"insert","lines":["d"],"id":114},{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"insert","lines":["u"]},{"start":{"row":23,"column":45},"end":{"row":23,"column":46},"action":"insert","lines":["c"]},{"start":{"row":23,"column":46},"end":{"row":23,"column":47},"action":"insert","lines":["t"]},{"start":{"row":23,"column":47},"end":{"row":23,"column":48},"action":"insert","lines":["i"]},{"start":{"row":23,"column":48},"end":{"row":23,"column":49},"action":"insert","lines":["o"]},{"start":{"row":23,"column":49},"end":{"row":23,"column":50},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":91},"end":{"row":23,"column":92},"action":"remove","lines":["5"],"id":115},{"start":{"row":23,"column":90},"end":{"row":23,"column":91},"action":"remove","lines":["6"]}],[{"start":{"row":23,"column":90},"end":{"row":23,"column":91},"action":"insert","lines":["2"],"id":116},{"start":{"row":23,"column":91},"end":{"row":23,"column":92},"action":"insert","lines":["0"]}],[{"start":{"row":23,"column":87},"end":{"row":23,"column":88},"action":"remove","lines":["y"],"id":117},{"start":{"row":23,"column":86},"end":{"row":23,"column":87},"action":"remove","lines":["d"]},{"start":{"row":23,"column":85},"end":{"row":23,"column":86},"action":"remove","lines":["o"]},{"start":{"row":23,"column":84},"end":{"row":23,"column":85},"action":"remove","lines":["b"]}],[{"start":{"row":23,"column":84},"end":{"row":23,"column":85},"action":"insert","lines":["i"],"id":118},{"start":{"row":23,"column":85},"end":{"row":23,"column":86},"action":"insert","lines":["n"]},{"start":{"row":23,"column":86},"end":{"row":23,"column":87},"action":"insert","lines":["t"]}],[{"start":{"row":23,"column":84},"end":{"row":23,"column":87},"action":"remove","lines":["int"],"id":119},{"start":{"row":23,"column":84},"end":{"row":23,"column":96},"action":"insert","lines":["introduction"]}],[{"start":{"row":44,"column":38},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":120},{"start":{"row":45,"column":0},"end":{"row":45,"column":32},"action":"insert","lines":["                                "]}],[{"start":{"row":45,"column":32},"end":{"row":47,"column":38},"action":"insert","lines":["<div class=\"body mt-3\">","                                    {{ str_limit($post->body, 1500) }}","                                </div>"],"id":121}],[{"start":{"row":47,"column":38},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":122},{"start":{"row":48,"column":0},"end":{"row":48,"column":32},"action":"insert","lines":["                                "]}],[{"start":{"row":48,"column":32},"end":{"row":50,"column":38},"action":"insert","lines":["<div class=\"body mt-3\">","                                    {{ str_limit($post->body, 1500) }}","                                </div>"],"id":123}],[{"start":{"row":52,"column":19},"end":{"row":56,"column":34},"action":"remove","lines":["         <div class=\"image col-md-6 text-right mt-4\">","                                @if ($post->image_path)","                                    <img src=\"{{ asset('storage/image/' . $post->image_path) }}\">","                                @endif","                            </div>"],"id":124},{"start":{"row":52,"column":18},"end":{"row":52,"column":19},"action":"remove","lines":[" "]},{"start":{"row":52,"column":17},"end":{"row":52,"column":18},"action":"remove","lines":[" "]},{"start":{"row":52,"column":16},"end":{"row":52,"column":17},"action":"remove","lines":[" "]},{"start":{"row":52,"column":12},"end":{"row":52,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":51,"column":34},"end":{"row":52,"column":12},"action":"remove","lines":["","            "],"id":125}],[{"start":{"row":39,"column":48},"end":{"row":39,"column":49},"action":"remove","lines":["e"],"id":126},{"start":{"row":39,"column":47},"end":{"row":39,"column":48},"action":"remove","lines":["l"]},{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"remove","lines":["t"]},{"start":{"row":39,"column":45},"end":{"row":39,"column":46},"action":"remove","lines":["i"]},{"start":{"row":39,"column":44},"end":{"row":39,"column":45},"action":"remove","lines":["t"]}],[{"start":{"row":39,"column":44},"end":{"row":39,"column":45},"action":"insert","lines":["n"],"id":127},{"start":{"row":39,"column":45},"end":{"row":39,"column":46},"action":"insert","lines":["a"]},{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"insert","lines":["m"]},{"start":{"row":39,"column":47},"end":{"row":39,"column":48},"action":"insert","lines":["e"]}],[{"start":{"row":39,"column":44},"end":{"row":39,"column":48},"action":"remove","lines":["name"],"id":128},{"start":{"row":39,"column":44},"end":{"row":39,"column":48},"action":"insert","lines":["name"]}],[{"start":{"row":40,"column":60},"end":{"row":40,"column":61},"action":"remove","lines":["e"],"id":129},{"start":{"row":40,"column":59},"end":{"row":40,"column":60},"action":"remove","lines":["l"]},{"start":{"row":40,"column":58},"end":{"row":40,"column":59},"action":"remove","lines":["t"]},{"start":{"row":40,"column":57},"end":{"row":40,"column":58},"action":"remove","lines":["i"]},{"start":{"row":40,"column":56},"end":{"row":40,"column":57},"action":"remove","lines":["t"]}],[{"start":{"row":40,"column":56},"end":{"row":40,"column":57},"action":"insert","lines":["n"],"id":130}],[{"start":{"row":40,"column":56},"end":{"row":40,"column":57},"action":"remove","lines":["n"],"id":131},{"start":{"row":40,"column":56},"end":{"row":40,"column":60},"action":"insert","lines":["name"]}],[{"start":{"row":43,"column":59},"end":{"row":43,"column":60},"action":"remove","lines":["y"],"id":132},{"start":{"row":43,"column":58},"end":{"row":43,"column":59},"action":"remove","lines":["d"]},{"start":{"row":43,"column":57},"end":{"row":43,"column":58},"action":"remove","lines":["o"]},{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"remove","lines":["b"]}],[{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"insert","lines":["g"],"id":133}],[{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"remove","lines":["g"],"id":134},{"start":{"row":43,"column":56},"end":{"row":43,"column":62},"action":"insert","lines":["gender"]}],[{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"remove","lines":["5"],"id":135}],[{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"remove","lines":["0"],"id":136}],[{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"insert","lines":["5"],"id":137}],[{"start":{"row":42,"column":47},"end":{"row":42,"column":48},"action":"remove","lines":["y"],"id":138},{"start":{"row":42,"column":46},"end":{"row":42,"column":47},"action":"remove","lines":["d"]},{"start":{"row":42,"column":45},"end":{"row":42,"column":46},"action":"remove","lines":["o"]},{"start":{"row":42,"column":44},"end":{"row":42,"column":45},"action":"remove","lines":["b"]}],[{"start":{"row":42,"column":44},"end":{"row":42,"column":45},"action":"insert","lines":["g"],"id":139}],[{"start":{"row":42,"column":44},"end":{"row":42,"column":45},"action":"remove","lines":["g"],"id":140},{"start":{"row":42,"column":44},"end":{"row":42,"column":50},"action":"insert","lines":["gender"]}],[{"start":{"row":45,"column":47},"end":{"row":45,"column":48},"action":"remove","lines":["y"],"id":141},{"start":{"row":45,"column":46},"end":{"row":45,"column":47},"action":"remove","lines":["d"]},{"start":{"row":45,"column":45},"end":{"row":45,"column":46},"action":"remove","lines":["o"]},{"start":{"row":45,"column":44},"end":{"row":45,"column":45},"action":"remove","lines":["b"]}],[{"start":{"row":45,"column":44},"end":{"row":45,"column":45},"action":"insert","lines":["h"],"id":142}],[{"start":{"row":45,"column":44},"end":{"row":45,"column":45},"action":"remove","lines":["h"],"id":143},{"start":{"row":45,"column":44},"end":{"row":45,"column":49},"action":"insert","lines":["hobby"]}],[{"start":{"row":46,"column":59},"end":{"row":46,"column":60},"action":"remove","lines":["y"],"id":144},{"start":{"row":46,"column":58},"end":{"row":46,"column":59},"action":"remove","lines":["d"]},{"start":{"row":46,"column":57},"end":{"row":46,"column":58},"action":"remove","lines":["o"]},{"start":{"row":46,"column":56},"end":{"row":46,"column":57},"action":"remove","lines":["b"]}],[{"start":{"row":46,"column":56},"end":{"row":46,"column":57},"action":"insert","lines":["h"],"id":145}],[{"start":{"row":46,"column":56},"end":{"row":46,"column":57},"action":"remove","lines":["h"],"id":146},{"start":{"row":46,"column":56},"end":{"row":46,"column":61},"action":"insert","lines":["hobby"]}],[{"start":{"row":46,"column":64},"end":{"row":46,"column":65},"action":"remove","lines":["5"],"id":147},{"start":{"row":46,"column":63},"end":{"row":46,"column":64},"action":"remove","lines":["1"]}],[{"start":{"row":46,"column":63},"end":{"row":46,"column":64},"action":"insert","lines":["3"],"id":148}],[{"start":{"row":49,"column":62},"end":{"row":49,"column":63},"action":"remove","lines":["1"],"id":149}],[{"start":{"row":49,"column":59},"end":{"row":49,"column":60},"action":"remove","lines":["y"],"id":150},{"start":{"row":49,"column":58},"end":{"row":49,"column":59},"action":"remove","lines":["d"]},{"start":{"row":49,"column":57},"end":{"row":49,"column":58},"action":"remove","lines":["o"]},{"start":{"row":49,"column":56},"end":{"row":49,"column":57},"action":"remove","lines":["b"]}],[{"start":{"row":49,"column":56},"end":{"row":49,"column":57},"action":"insert","lines":["i"],"id":151}],[{"start":{"row":49,"column":56},"end":{"row":49,"column":57},"action":"remove","lines":["i"],"id":152},{"start":{"row":49,"column":56},"end":{"row":49,"column":68},"action":"insert","lines":["introduction"]}],[{"start":{"row":48,"column":47},"end":{"row":48,"column":48},"action":"remove","lines":["y"],"id":153},{"start":{"row":48,"column":46},"end":{"row":48,"column":47},"action":"remove","lines":["d"]},{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"remove","lines":["o"]},{"start":{"row":48,"column":44},"end":{"row":48,"column":45},"action":"remove","lines":["b"]}],[{"start":{"row":48,"column":44},"end":{"row":48,"column":45},"action":"insert","lines":["i"],"id":154}],[{"start":{"row":48,"column":44},"end":{"row":48,"column":45},"action":"remove","lines":["i"],"id":155},{"start":{"row":48,"column":44},"end":{"row":48,"column":56},"action":"insert","lines":["introduction"]}]]},"ace":{"folds":[],"scrolltop":612,"scrollleft":0,"selection":{"start":{"row":60,"column":11},"end":{"row":60,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1612886779725,"hash":"f33ccdcb177d5dea9e97854fd82a62a35116ae0c"}