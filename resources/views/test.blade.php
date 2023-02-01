{{-- 掲載中案件の前のやつ --}}
@foreach($matters as $matter)
    <form action='{{ route('matterEdit',['id'=>$matter->id]) }}'method='post'>
        @csrf
        <!-- 案件名 -->
        <label for="dark_field" style="color:#fff;" >案件名<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->matter_name }}</p><br>
    
        <!-- 都道府県 -->
        @php
          $prefectures1 = DB::table('prefectures')->find($matter->prefectures_id);
        @endphp
        <label for="dark_field" style="color:#fff;" >都道府県<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $prefectures1->prefectures_name }}</p><br>
    
        <!-- 連絡先 -->
        <label for="dark_field" style="color:#fff;" >連絡先<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->tel }}</p><br>

        <!-- 職種 -->
        @php
            $occupation1 = DB::table('occupations')->find($matter->occupation_id);
        @endphp
        <label for="dark_field" style="color:#fff;" >職種<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $occupation1->occupation_name }}</p><br>

        <!-- 求めるスキル -->
        <label for="dark_field" style="color:#fff;" >求めるスキル1<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                @php
                    $devLan1 = DB::table('development_languages')->find($matter->development_language_id1);
                    $devLan2 = DB::table('development_languages')->find($matter->development_language_id2);
                    $devLan3 = DB::table('development_languages')->find($matter->development_language_id3);
                    $devLan4 = DB::table('development_languages')->find($matter->development_language_id4);
                @endphp
                {{ $devLan1->language_name }}</p><br>
            <label for="dark_field" style="color:#fff;">求めるスキル2</label>
                <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan2->language_name }}</p><br>
            <label for="dark_field" style="color:#fff;">求めるスキル3</label>
                <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan3->language_name }}</p><br>
            <label for="dark_field" style="color:#fff;">求めるスキル4</label>
                <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >
                {{ $devLan4->language_name }}</p><br>
            {{-- {{ dd($matter->development_language) }} --}}
            {{-- <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->development_language2->language_name }}</p><br> --}}

        <!-- 期限 -->
        <label for="dark_field" style="color:#fff;" >期限<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->deadline }}</p><br>
            <!-- <p>期限：{{$matter->deadline}}</p> -->

        <!-- 特記事項 -->
        <label for="dark_field" style="color:#fff;" >特記事項<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->remarks }}</p><br>
            <!-- <p>特記事項：{{$matter->remarks}}</p> -->

        <!-- パーティ人数 -->
        <label for="dark_field" style="color:#fff;" >パーティ人数<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->number_of_person }}</p><br>
            <!-- <p>パーティ人数：{{$matter->number_of_person}}</p> -->

        <!-- 成功報酬 -->
        <label for="dark_field" style="color:#fff;" >成功報酬<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->success_fee }}</p><br>

        <!-- 案件ランク -->
        <label for="dark_field" style="color:#fff;" >案件ランク<br>
            <p id="dark_field" class="nes-input is-dark p-posting__matter" name="name" >{{ $matter->rank }}</p>
    

</div>
</div>
    <input type="submit" class="nes-btn is-success" value=編集>
    </div>
</form>
@endforeach
{{ dd($development_languages) }} --}}


@endsection