@extends('layouts.apps')
@section('content')
    <div class="d-flex justify-content-start mt-5 ms-5 ">
        <h1 class="purple"><b>Halo, {{ auth()->user()->name }}!</b></h1>
    </div>
    <div class="d-flex justify-content-start mt-xl-3 ms-5">
        <h4><b>Pilihlah subtopik yang ingin anda tantang!</b></h4>
    </div>
    <div class="ms-2 me-5 d-flex flex-column">
        <div class="d-flex align-items-center">
            <img src="{{ asset('img/rumahkanan.svg')}}" class="absolute" width="200px" height="200px">
            <div class="d-flex flex-column">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <a href="{{ route('topics.show', 1) }}">
                <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">1</h1>
                </div>
            </a>
            <div class="d-flex flex-column">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <?php $isUnlocked = false; ?>
            @foreach ($unlockedTopics as $unlockedTopic)
                @if ($unlockedTopic->topic_id == 2)
                    <?php
                    unset($unlockedTopics[$loop->index]);
                    $isUnlocked = true;
                    ?>
                @endif
            @endforeach
            @if ($isUnlocked)
                <a href="{{ route('topics.show', 2) }}">
                    <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center">
                        <h1 class="text-center mb-0 fw-bold">2</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">2</h1>
                </div>
            @endif
            <div class="d-flex flex-column">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <img src="{{ asset('img/fourroad.svg') }}" class="absolute r90" width="100px" height=100px">
            <img src="{{ asset('img/warehouse.svg') }}" width="200px" height=200px">
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center test">
            <?php $isUnlocked = false; ?>
            @foreach ($unlockedTopics as $unlockedTopic)
                @if ($unlockedTopic->topic_id == 3)
                    <?php
                    unset($unlockedTopics[$loop->index]);
                    $isUnlocked = true;
                    ?>
                @endif
            @endforeach
            @if ($isUnlocked)
                <a href="{{ route('topics.show', 3) }}">
                    <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center">
                        <h1 class="text-center mb-0 fw-bold">3</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">3</h1>
                </div>
            @endif
            <div class="d-flex flex-row">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
        </div>
        <img src="{{ asset('img/road.svg') }}" class="absolute st1" width="100px" height=100px">

        <img src="{{ asset('img/waterfall.svg') }}" class="absolute" style="margin-left: -600px; margin-top: -50px;" width="300px" height=300px">
        <div style="margin-top: -185px;">
            <img src="{{ asset('img/road.svg') }}" class="absolute st4"  width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute st5"  width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute st6"  width="50px" height="50px">
            <?php $isUnlocked = false; ?>
            @foreach ($unlockedTopics as $unlockedTopic)
                @if ($unlockedTopic->topic_id == 4)
                    <?php
                    unset($unlockedTopics[$loop->index]);
                    $isUnlocked = true;
                    ?>
                @endif
            @endforeach
            @if ($isUnlocked)
                <a href="{{ route('topics.show', 4) }}">
                    <div class="topic-home topic-home-unlocked absolute st2 d-inline-flex justify-content-center align-items-center">
                        <h1 class="text-center mb-0 fw-bold">4</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked absolute st2 d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">4</h1>
                </div>
            @endif
            <img src="{{ asset('img/fourroad.svg') }}" class="absolute" style="margin-left: -102.5px; margin-top: 230px; z-index: 2;" width="100px" height=100px">
        </div>
        <img src="{{ asset('img/mansion.svg') }}" class="absolute" style="margin-left: 875px; transform: rotate(90deg); margin-top: -190px;" width="300px" height=300px">
        <div style="margin-top: 0px;">
            <img src="{{ asset('img/road.svg') }}" class="absolute st7" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute strumput1" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute strumput2" width="50px" height="50px">
        </div>
        <?php $isUnlocked = false; ?>
        @foreach ($unlockedTopics as $unlockedTopic)
            @if ($unlockedTopic->topic_id == 5)
                <?php
                unset($unlockedTopics[$loop->index]);
                $isUnlocked = true;
                ?>
            @endif
        @endforeach
        @if ($isUnlocked)
            <a href="{{ route('topics.show', 5) }}">
                <div class="topic-home topic-home-unlocked absolute stc1 d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">5</h1>
                </div>
            </a>
        @else
            <div class="topic-home topic-home-locked absolute stc1 d-inline-flex justify-content-center align-items-center">
                <h1 class="text-center mb-0 fw-bold">5</h1>
            </div>
        @endif
        <div class="div2">
            <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
            <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
            <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
        </div>
        <?php $isUnlocked = false; ?>
        @foreach ($unlockedTopics as $unlockedTopic)
            @if ($unlockedTopic->topic_id == 6)
                <?php
                unset($unlockedTopics[$loop->index]);
                $isUnlocked = true;
                ?>
            @endif
        @endforeach
        @if ($isUnlocked)
            <a href="{{ route('topics.show', 6) }}">
                <div class="topic-home topic-home-unlocked absolute m90 mml20 stc2 d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">6</h1>
                </div>
            </a>
        @else
            <div class="topic-home topic-home-locked absolute m90 mml20 stc2 d-inline-flex justify-content-center align-items-center">
                <h1 class="text-center mb-0 fw-bold">6</h1>
            </div>
        @endif
        <img src="{{ asset('img/lhouse.svg') }}" style="margin-left: -360px; margin-top: -132.5px; z-index: 2; transform: rotate(180deg); position: absolute;" width="150px" height="150px">
        <div class="div1">
            <img src="{{ asset('img/road.svg') }}" class="absolute st7" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute strumput1" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute strumput2" width="50px" height="50px">
        </div>
        <div style="margin-top: -310px;">
            <img src="{{ asset('img/road.svg') }}" class="absolute stroadlast" width="100px" height=100px">
            <?php $isUnlocked = false; ?>
            @foreach ($unlockedTopics as $unlockedTopic)
                @if ($unlockedTopic->topic_id == 7)
                    <?php
                    unset($unlockedTopics[$loop->index]);
                    $isUnlocked = true;
                    ?>
                @endif
            @endforeach
            @if ($isUnlocked)
                <a href="{{ route('topics.show', 7) }}">
                    <div class="topic-home topic-home-unlocked absolute d-inline-flex justify-content-center align-items-center">
                        <h1 class="text-center mb-0 fw-bold">7</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked absolute d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">7</h1>
                </div>
            @endif
            <img src="{{ asset('img/road.svg') }}" class="absolute" style="margin-left: -102.5px; margin-top: 230px;" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute strumput4"  width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute strumput3" width="50px" height="50px">
            <?php $isUnlocked = false; ?>
            @foreach ($unlockedTopics as $unlockedTopic)
                @if ($unlockedTopic->topic_id == 8)
                    <?php
                    unset($unlockedTopics[$loop->index]);
                    $isUnlocked = true;
                    ?>
                @endif
            @endforeach
            @if ($isUnlocked)
                <a href="{{ route('topics.show', 8) }}">
                    <div class="topic-home topic-home-unlocked absolute d-inline-flex justify-content-center align-items-center">
                        <h1 class="text-center mb-0 fw-bold">8</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked absolute d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">8</h1>
                </div>
            @endif
            <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: 230px; margin-left: -21.5px;" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: 230px; margin-left: -162px;" width="50px" height="50px">
            <img src="{{ asset('img/road.svg') }}" class="absolute" style="margin-left: -25px; margin-top: 645px;" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: 655px; margin-left: -25px;" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: 655px; margin-left: -160px;" width="50px" height="50px">
        </div>
        <img src="{{ asset('img/lhouse.svg') }}" style="margin-left: 17.5px; margin-top: 10px; z-index: 2; transform: rotate(90deg); position: absolute;" width="150px" height="150px">
        <div style="margin-top: -25px;">
        <img src="{{ asset('img/road.svg') }}" class="absolute" style="margin-left: 175px; margin-top:  47.5px; transform: rotate(90deg);" width="100px" height=100px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: 160px; margin-left: -75px;" width="50px" height="50px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: -55px; margin-left: -55px;" width="50px" height="50px">
        <?php $isUnlocked = false; ?>
        @foreach ($unlockedTopics as $unlockedTopic)
            @if ($unlockedTopic->topic_id == 9)
                <?php
                unset($unlockedTopics[$loop->index]);
                $isUnlocked = true;
                ?>
            @endif
        @endforeach
        @if ($isUnlocked)
            <a href="{{ route('topics.show', 9) }}">
                <div class="topic-home topic-home-unlocked absolute m90 mml20 d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">9</h1>
                </div>
            </a>
        @else
            <div class="topic-home topic-home-locked absolute m90 mml20 d-inline-flex justify-content-center align-items-center">
                <h1 class="text-center mb-0 fw-bold">9</h1>
            </div>
        @endif
        </div>
        <div style="margin-top: -252.5px; margin-left: 385px; margin-right: 400px;">
            <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
            <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
            <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
        </div>
        <div style="margin-top: -230px; margin-left: 582.5px; z-index: 1;">
            <?php $isUnlocked = false; ?>
            @foreach ($unlockedTopics as $unlockedTopic)
                @if ($unlockedTopic->topic_id == 10)
                    <?php
                    unset($unlockedTopics[$loop->index]);
                    $isUnlocked = true;
                    ?>
                @endif
            @endforeach
            @if ($isUnlocked)
                <a href="{{ route('topics.show', 10) }}">
                    <div class="topic-home topic-home-unlocked absolute m90 mml20 d-inline-flex justify-content-center align-items-center">
                        <h1 class="text-center mb-0 fw-bold">10</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked absolute m90 mml20 d-inline-flex justify-content-center align-items-center">
                    <h1 class="text-center mb-0 fw-bold">10</h1>
                </div>
            @endif
            <img src="{{ asset('img/road.svg') }}" class="absolute" style="margin-left: 5px; margin-top:  67.5px; transform: rotate(90deg);" width="100px" height=100px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: 180px; margin-left: -75px;" width="50px" height="50px">
            <img src="{{ asset('img/rumput.svg')}}" class="absolute" style="margin-top: -25px; margin-left: -55px;" width="50px" height="50px">
        </div>
        <img src="{{ asset('img/bighouse.svg')}}" class="absolute" style="margin-top: -200px; margin-left: 850px; transform: rotate(90deg);" width="250px" height="250px">
        <img src="{{ asset('img/warehouse.svg') }}" class="absolute" style="margin-top: -1000px; margin-left: 250px;" width="400px" height=400px">
        <img src="{{ asset('img/warehouse.svg') }}" class="absolute" style="margin-top: -1050px; margin-left: 675px;" width="400px" height=400px">
    </div>

@endsection
