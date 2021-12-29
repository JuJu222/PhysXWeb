@extends('layouts.apps')
@section('content')
    <div class="d-flex justify-content-start mt-5 ms-5 ">
        <h1 class="purple"><b>Halo, {{ auth()->user()->name }}!</b></h1>
    </div>
    <div class="d-flex justify-content-start mt-xl-3 ms-5">
        <h4><b>Pilihlah subtopik yang ingin anda tantang!</b></h4>
    </div>
    <div class="card home-card">
        <div class="row">
            <div class="col">
                <h4 class="font-weight-bold">Skor Total:</h4>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/score-symbol.svg') }}" alt="Skor">
                    <h1 class="font-weight-bold d-inline">80.000</h1>
                </div>
            </div>
            <div class="col-md-auto">
                <h4 class="font-weight-bold">Skor Total:</h4>
                <h1 class="font-weight-bold">80.000</h1>
            </div>
        </div>
    </div>
    <div class="ms-2 me-5 d-flex flex-column home-parent">
        <div class="d-flex align-items-center">
            <img src="{{ asset('img/rumahkanan.svg')}}" class="absolute mr-2" width="200px" height="200px">
            <div class="d-flex flex-column align-items-center mt-4">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <a href="{{ route('topics.show', 1) }}">
                <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center mx-2 mt-4">
                    <h1 class="text-center mb-0 fw-bold">1</h1>
                </div>
            </a>
            <div class="d-flex flex-column align-items-center mt-4">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column align-items-center mt-4">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column align-items-center mt-4">
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
                    <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center mx-2 mt-4">
                        <h1 class="text-center mb-0 fw-bold">2</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center mx-2 mt-4">
                    <h1 class="text-center mb-0 fw-bold">2</h1>
                </div>
            @endif
            <div class="d-flex flex-column align-items-center mt-4">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <img src="{{ asset('img/fourroad.svg') }}" class="absolute r90 mt-4" width="100px" height=100px">
            <img src="{{ asset('img/warehouse.svg') }}" class="mt-4 r90 warehouse1" width="200px" height=200px">
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center home-row-2">
            <div>
                <img src="{{ asset('img/waterfall.svg')}}" class="absolute fountain" width="150px">
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center">
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
                        <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center my-2">
                            <h1 class="text-center mb-0 fw-bold">3</h1>
                        </div>
                    </a>
                @else
                    <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center my-2">
                        <h1 class="text-center mb-0 fw-bold">3</h1>
                    </div>
                @endif
                <div class="d-flex flex-row align-items-center">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                    <img src="{{ asset('img/road.svg')}}" class="absolute" width="100px" height="100px">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                </div>
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
                        <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center my-2">
                            <h1 class="text-center mb-0 fw-bold">4</h1>
                        </div>
                    </a>
                @else
                    <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center my-2">
                        <h1 class="text-center mb-0 fw-bold">4</h1>
                    </div>
                @endif
                <div class="d-flex flex-row align-items-center">
                    <img src="{{ asset('img/road.svg')}}" class="absolute" width="100px" height="100px">
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center home-row-3">
            <img src="{{ asset('img/lhouse.svg')}}" class="r180 mt-5 mr-2" width="200px" height="200px">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
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
                    <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center mx-2">
                        <h1 class="text-center mb-0 fw-bold">6</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center mx-2">
                    <h1 class="text-center mb-0 fw-bold">6</h1>
                </div>
            @endif
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
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
                    <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center mx-2">
                        <h1 class="text-center mb-0 fw-bold">5</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center mx-2">
                    <h1 class="text-center mb-0 fw-bold">5</h1>
                </div>
            @endif
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <img src="{{ asset('img/fourroad.svg') }}" class="absolute r90 four-road" width="100px" height=100px">
            <img src="{{ asset('img/bighouse.svg') }}" width="300px" height=300px">
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center testa home-row-4">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-row align-items-center">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                    <img src="{{ asset('img/road.svg')}}" class="absolute" width="100px" height="100px">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                </div>
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
                        <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center my-2">
                            <h1 class="text-center mb-0 fw-bold">7</h1>
                        </div>
                    </a>
                @else
                    <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center my-2">
                        <h1 class="text-center mb-0 fw-bold">7</h1>
                    </div>
                @endif
                <div class="d-flex flex-row align-items-center">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                    <img src="{{ asset('img/road.svg')}}" class="absolute" width="100px" height="100px">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                </div>
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
                        <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center my-2">
                            <h1 class="text-center mb-0 fw-bold">8</h1>
                        </div>
                    </a>
                @else
                    <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center my-2">
                        <h1 class="text-center mb-0 fw-bold">8</h1>
                    </div>
                @endif
                <div class="d-flex flex-row align-items-center">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                    <img src="{{ asset('img/road.svg')}}" class="absolute" width="100px" height="100px">
                    <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                </div>
            </div>
            <div>
                <img src="{{ asset('img/warehouse.svg') }}" class="ml-5" width="400px">
                <img src="{{ asset('img/warehouse.svg') }}" class="ml-5" width="400px">
            </div>
        </div>
        <div class="d-flex align-items-center home-row-5">
            <img src="{{ asset('img/lhouse.svg')}}" class="absolute r90" width="200px" height="200px">
            <div class="d-flex flex-column align-items-center mt-5 ml-1">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
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
                    <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center mx-2 mt-5">
                        <h1 class="text-center mb-0 fw-bold">9</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center mx-2 mt-5">
                    <h1 class="text-center mb-0 fw-bold">9</h1>
                </div>
            @endif
            <div class="d-flex flex-column align-items-center mt-5">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column align-items-center mt-5">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <div class="d-flex flex-column align-items-center mt-5">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
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
                    <div class="topic-home topic-home-unlocked d-inline-flex justify-content-center align-items-center mx-2 mt-5">
                        <h1 class="text-center mb-0 fw-bold">10</h1>
                    </div>
                </a>
            @else
                <div class="topic-home topic-home-locked d-inline-flex justify-content-center align-items-center mx-2 mt-5">
                    <h1 class="text-center mb-0 fw-bold">10</h1>
                </div>
            @endif
            <div class="d-flex flex-column align-items-center mt-5">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
                <img src="{{ asset('img/road.svg')}}" class="absolute r90" width="100px" height="100px">
                <img src="{{ asset('img/rumput.svg')}}" class="absolute" width="50px" height="50px">
            </div>
            <img src="{{ asset('img/fourroad.svg') }}" class="absolute r90 mt-5" width="100px" height=100px">
            <img src="{{ asset('img/mansion.svg') }}" width="300px" class="r90 mt-5 mansion" height=300px">
        </div>
    </div>

@endsection
