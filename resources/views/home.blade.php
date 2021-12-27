@extends('layouts.apps')
@section('content')
    <div class="d-flex justify-content-start mt-5 ms-5 ">
        <h1 class="purple"><b>Halo, Justin!</b></h1>
    </div>
    <div class="d-flex justify-content-start mt-xl-3 ms-5">
        <h4><b>Pilihlah subtopik yang ingin anda tantang!</b></h4>
    </div>
    <div class="ms-2 me-5">
        <img src="{{ asset('img/rumahkanan.svg')}}" class="absolute m60" width="200px" height="200px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute m180" width="50px" height="50px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute m1055" width="50px" height="50px">
        <img src="{{ asset('img/road.svg')}}" class="absolute m45 mn80 r90 m90" width="100px" height="100px">
        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-circle-fill purple m90" viewBox="0 0 16 16">
            <a href="{{ route('topics.show', 1) }}">
                <circle cx="8" cy="8" r="8"/>
            </a>
        </svg>
        <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
        <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
        <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-circle-fill purple m90 mml20" viewBox="0 0 16 16">
                <a href="{{ route('topics.show', 2) }}">
                    <circle cx="8" cy="8" r="8"/>
                </a>
            </svg>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="bi bi-circle-fill purple m90 mml20" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
            </svg>
        @endif
        <img src="{{ asset('img/road.svg') }}" class="absolute r90 m90" width="100px" height=100px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute ml75" width="50px" height="50px">
        <img src="{{ asset('img/rumput.svg')}}" class="absolute m20080" width="50px" height="50px">
        <img src="{{ asset('img/fourroad.svg') }}" class="absolute r90 m90" width="100px" height=100px">
        <img src="{{ asset('img/warehouse.svg') }}" class="absolute warehouse1" width="200px" height=200px">
        {{-- Style ga rapi --}}
        <img src="{{ asset('img/road.svg') }}" class="absolute st1" width="100px" height=100px">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="absolute bi bi-circle-fill purple st3" viewBox="0 0 16 16">
                <a href="{{ route('topics.show', 3) }}">
                    <circle cx="8" cy="8" r="8"/>
                </a>
            </svg>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="absolute bi bi-circle-fill purple st3" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
            </svg>
        @endif
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
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-circle-fill purple absolute st2" viewBox="0 0 16 16">
                    <a href="{{ route('topics.show', 4) }}">
                        <circle cx="8" cy="8" r="8"/>
                    </a>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="bi bi-circle-fill purple absolute st2" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
                </svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-circle-fill purple absolute stc1" viewBox="0 0 16 16">
                <a href="{{ route('topics.show', 5) }}">
                    <circle cx="8" cy="8" r="8"/>
                </a>
            </svg>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="bi bi-circle-fill purple absolute stc1" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
            </svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="absolute bi bi-circle-fill purple m90 mml20 stc2" viewBox="0 0 16 16">
                <a href="{{ route('topics.show', 6) }}">
                    <circle cx="8" cy="8" r="8"/>
                </a>
            </svg>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="absolute bi bi-circle-fill purple m90 mml20 stc2" viewBox="0 0 16 16">
                <circle cx="8" cy="8" r="8"/>
            </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="absolute bi bi-circle-fill purple" style="margin-top: 25px; margin-left: -101px;" viewBox="0 0 16 16">
                    <a href="{{ route('topics.show', 7) }}">
                        <circle cx="8" cy="8" r="8"/>
                    </a>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="absolute bi bi-circle-fill purple" style="margin-top: 25px; margin-left: -101px;" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="absolute bi bi-circle-fill purple" style="margin-top: 435px; margin-left: -25px;" viewBox="0 0 16 16">
                    <a href="{{ route('topics.show', 8) }}">
                        <circle cx="8" cy="8" r="8"/>
                    </a>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="absolute bi bi-circle-fill purple" style="margin-top: 435px; margin-left: -25px;" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
                </svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="absolute bi bi-circle-fill purple m90 mml20" style="margin-top: 45px; margin-left: 25px;" viewBox="0 0 16 16">
                <a href="{{ route('topics.show', 9) }}">
                    <circle cx="8" cy="8" r="8"/>
                </a>
            </svg>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="absolute bi bi-circle-fill purple m90 mml20" style="margin-top: 45px; margin-left: 25px;" viewBox="0 0 16 16">
                <circle cx="8" cy="8" r="8"/>
            </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="absolute bi bi-circle-fill purple" style="margin-left: 75px; margin-top: 65px;" viewBox="0 0 16 16">
                    <a href="{{ route('topics.show', 10) }}">
                        <circle cx="8" cy="8" r="8"/>
                    </a>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#FD6F96" class="absolute bi bi-circle-fill purple" style="margin-left: 75px; margin-top: 65px;" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
                </svg>
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
