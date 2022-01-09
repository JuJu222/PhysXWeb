@extends('layouts.apps')
@section('title', $topic->topic_name . ' - PhysXWeb')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <span><h2 class="mt-3 fw-bold purple">{{ $topic->topic_name }}</h2></span>
</div>
<div class="mt-5 me-5">
@yield('topic_content')
</div>
<div class="d-flex justify-content-center mt-5">
    <h3 class="fw-bolder">Mari tantang diri anda dan dapatkan skor yang terbaik!</h3>
</div>
<div class="d-flex justify-content-center my-4">
    <?php $easyIsUnlocked = false; ?>
    <?php $hardIsUnlocked = false; ?>
    @foreach ($unlockedTopics as $unlockedTopic)
        @if ($unlockedTopic->topic_id == $topicsEasy)
            <?php
            unset($unlockedTopics[$loop->index]);
            $easyIsUnlocked = true;
            ?>
        @endif
        @if ($unlockedTopic->topic_id == $topicsHard)
            <?php
            unset($unlockedTopics[$loop->index]);
            $hardIsUnlocked = true;
            ?>
        @endif
    @endforeach
    @if($easyIsUnlocked || $topicsEasy == 1)
        <a href="{{ route('questionSoal', $topicsEasy) }}" class="btn btn-opaque rounded-circleX px-4 mx-3 w-100" type="button">Mudah</a>
    @else
        <a class="btn btn-opaque rounded-circleX px-4 mx-3 disabled w-100" type="button">Mudah</a>
    @endif
    @if($hardIsUnlocked)
        <a href="{{ route('questionSoal', $topicsHard) }}" class="btn btn-opaque rounded-circleX px-4 mx-3 w-100" type="button">Susah</a>
    @else
        <a class="btn btn-opaque rounded-circleX px-4 mx-3 disabled w-100" type="button">Susah</a>
    @endif
</div>
    <div class="mb-5">
        <p>* Dapatkan ketepatan lebih besar atau sama dengan 60% di tingkat kesusahan Mudah agar anda dapat mengerjakan quiz topik ini dengan tingkat kesulisan Susah.</p>
        <p>* Ketepatan lebih besar atau sama dengan 60% di tingkat kesusahan Susah akan membuka kunci topik selanjutnya.</p>
    </div>
@endsection
