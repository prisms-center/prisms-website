<div>
    <div class="science-hero p-4 mb-4 shadow-sm">
        <div class="d-flex align-items-center">
            <div class="icon-circle bg-primary text-white me-3">
                <i class="fas fa-flask"></i>
            </div>
            <div>
                <h1 class="h3 mb-1 text-primary fw-bold">Integrated Collaborative Science</h1>
                <p class="mb-0 text-muted">The PRISMS Center develops tools to predict the behavior of metals, using
                    magnesium alloys as a test case due to their potential for lightweight, fuel-efficient applications
                    and their unique scientific challenges. Research is organized into four interconnected
                    areas—precipitate evolution, recrystallization and grain growth, tensile behavior, and fatigue
                    behavior—so that insights from one area inform the others. While the framework can apply to any
                    metal, magnesium is the focus for demonstrating its capabilities.</p>
            </div>
        </div>
    </div>

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
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>>

