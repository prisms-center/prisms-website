<div class="row g-4">
    <!-- Vertical Tabs -->
    <div class="col-12 col-lg-4">
        <div class="science-sticky position-sticky">
            <div class="card shadow-sm">
                <div class="card-body p-3">
                    <div class="nav nav-pills flex-column gap-2" id="science-tab" role="tablist"
                         aria-orientation="vertical">
                        <button class="nav-link text-start {{ $active === 'overview' ? 'active' : '' }}"
                                type="button" role="tab"
                                wire:click="setActive('overview')"
                                aria-controls="pane-overview" aria-selected="true">
                            <i class="fas fa-circle-info me-2 text-primary"></i> Overview
                        </button>
                        <button class="nav-link text-start {{ $active === 'precipitation' ? 'active' : '' }}"
                                type="button" role="tab"
                                wire:click="setActive('precipitation')"
                                aria-controls="pane-precipitation" aria-selected="false">
                            <i class="fas fa-cloud-rain me-2 text-success"></i> Precipitation
                        </button>
                        <button class="nav-link text-start {{ $active === 'recrystallization' ? 'active' : '' }}"
                                type="button" role="tab"
                                wire:click="setActive('recrystallization')"
                                aria-controls="pane-recrystallization" aria-selected="false">
                            <i class="fas fa-gem me-2 text-warning"></i> Recrystallization
                        </button>
                        <button class="nav-link text-start {{ $active === 'tensile' ? 'active' : '' }}"
                                type="button" role="tab"
                                wire:click="setActive('tensile')"
                                aria-controls="pane-tensile" aria-selected="false">
                            <i class="fas fa-arrows-left-right me-2 text-danger"></i> Tensile Behavior
                        </button>
                        <button class="nav-link text-start {{ $active === 'fatigue' ? 'active' : '' }}"
                                type="button" role="tab"
                                wire:click="setActive('fatigue')"
                                aria-controls="pane-fatigue" aria-selected="false">
                            <i class="fas fa-heart-pulse me-2 text-secondary"></i> Fatigue
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab Content -->
    <div class="col-12 col-lg-8">
        <div class="tab-content">
            <!-- Overview -->
            @if($active == "overview")
                <div class="tab-pane fade {{ $active === 'overview' ? 'show active' : '' }}"
                     role="tabpanel" aria-labelledby="tab-overview">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body p-4">
                            @include('pages.science.includes.overview')
                        </div>
                    </div>
                </div>
            @endif

            <!-- Precipitation -->
            @if($active == "precipitation")
                <div class="tab-pane fade {{ $active === 'precipitation' ? 'show active' : '' }}"
                     role="tabpanel" aria-labelledby="tab-precipitation">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body p-4">
                            @include('pages.science.includes.precipitate')
{{--                            <div class="d-flex align-items-center mb-2">--}}
{{--                                <div class="icon-circle bg-success bg-opacity-10 me-3"><i--}}
{{--                                        class="fas fa-cloud-rain text-success"></i></div>--}}
{{--                                <h2 class="h5 mb-0 text-success">Precipitation</h2>--}}
{{--                            </div>--}}
{{--                            <p class="mb-0 text-muted">Details on precipitation mechanisms, modeling approaches, and--}}
{{--                                experimental validation will be added here.</p>--}}
                        </div>
                    </div>
                </div>
            @endif

            <!-- Recrystallization -->
            @if ($active == "recrystallization")
                <div class="tab-pane fade {{ $active === 'recrystallization' ? 'show active' : '' }}"
                     role="tabpanel" aria-labelledby="tab-recrystallization">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body p-4">
                            @include('pages.science.includes.recrystallization')
{{--                            <div class="d-flex align-items-center mb-2">--}}
{{--                                <div class="icon-circle bg-warning bg-opacity-10 me-3"><i--}}
{{--                                        class="fas fa-gem text-warning"></i></div>--}}
{{--                                <h2 class="h5 mb-0 text-warning">Recrystallization</h2>--}}
{{--                            </div>--}}
{{--                            <p class="mb-0 text-muted">Planned content: nucleation and growth, microstructural--}}
{{--                                evolution, and multiscale simulation results.</p>--}}
                        </div>
                    </div>
                </div>
            @endif

            <!-- Tensile Behavior -->
            @if($active == "tensile")
                <div class="tab-pane fade {{ $active === 'tensile' ? 'show active' : '' }}"
                     role="tabpanel" aria-labelledby="tab-tensile">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body p-4">
                            @include('pages.science.includes.tensile')
{{--                            <div class="d-flex align-items-center mb-2">--}}
{{--                                <div class="icon-circle bg-danger bg-opacity-10 me-3"><i--}}
{{--                                        class="fas fa-arrows-left-right text-danger"></i></div>--}}
{{--                                <h2 class="h5 mb-0 text-danger">Tensile Behavior</h2>--}}
{{--                            </div>--}}
{{--                            <p class="mb-0 text-muted">Planned content: stress-strain response, constitutive models, and--}}
{{--                                validation experiments.</p>--}}
                        </div>
                    </div>
                </div>
            @endif

            <!-- Fatigue -->
            @if($active == "fatigue")
                <div class="tab-pane fade {{ $active === 'fatigue' ? 'show active' : '' }}"
                     role="tabpanel" aria-labelledby="tab-fatigue">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body p-4">
                            @include('pages.science.includes.fatigue')
{{--                            <div class="d-flex align-items-center mb-2">--}}
{{--                                <div class="icon-circle bg-secondary bg-opacity-10 me-3"><i--}}
{{--                                        class="fas fa-heart-pulse text-secondary"></i></div>--}}
{{--                                <h2 class="h5 mb-0 text-secondary">Fatigue</h2>--}}
{{--                            </div>--}}
{{--                            <p class="mb-0 text-muted">Planned content: fatigue life prediction, crack initiation and--}}
{{--                                growth, and uncertainty quantification.</p>--}}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
