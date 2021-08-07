<!--
  ①共通テンプレlayout.blade.phpを作る
  ②共通ヘッダーを作る
  ③共通フッダーを作る
  ④共通テンプレを継承したリストを作る
  -->
@extends('layout')
@section('title','ブログ詳細')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>{{ $blog->title }}</h2>
      <span>作成日:{{ $blog->created_at }}</span>
      <span>更新日:{{ $blog->updated_at }}</span>
      <p>{{ $blog->content }}</p>
      
  </div>
</div>
@endsection
