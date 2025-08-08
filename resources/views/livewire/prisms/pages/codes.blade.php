<div>
    <div class="science-hero p-4 mb-4 shadow-sm">
        <div class="d-flex align-items-center">
            <div class="icon-circle bg-primary text-white me-3">
                <i class="fas fa-flask"></i>
            </div>
            <div>
                <h1 class="h3 mb-1 text-primary fw-bold">PRISMS Computational Tools</h1>
                <p class="mb-0 text-muted">The PRISMS Center develops an integrated suite of multiscale/multiphysics
                    computational codes through a highly collaborative environment, with all tools hosted on GitHub and
                    released as open-source software under the GNU Lesser General Public License (LGPL) following
                    rigorous quality assurance practices. Our computational framework provides general numerical
                    solutions for nano-micro-mesa-macro analysis of structural materials, with primary focus on three
                    interconnected scientific challenges: predicting microstructure evolution from alloy composition and
                    processing, determining tensile properties from first principles, and forecasting fatigue behavior.
                    These challenges are addressed through a powerful combination of advanced numerical frameworks,
                    cutting-edge experimental techniques, and relevant phenomenological models that work synergistically
                    to enable predictive materials science.
                </p>
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
                                    wire:click="setActive('prisms-pf')"
                                    aria-controls="pane-precipitation" aria-selected="false">
                                <i class="fas fa-cloud-rain me-2 text-success"></i> PRISMS PF
                            </button>
                            <button class="nav-link text-start {{ $active === 'plasticity' ? 'active' : '' }}"
                                    type="button" role="tab"
                                    wire:click="setActive('plasticity')"
                                    aria-controls="pane-fatigue" aria-selected="false">
                                <i class="fas fa-heart-pulse me-2 text-secondary"></i> PRISMS Plasticity
                            </button>
                            <button class="nav-link text-start {{ $active === 'fatigue' ? 'active' : '' }}"
                                    type="button" role="tab"
                                    wire:click="setActive('multi-physics')"
                                    aria-controls="pane-fatigue" aria-selected="false">
                                <i class="fas fa-heart-pulse me-2 text-secondary"></i> PRISMS Multi-Physics
                            </button>
                            <button class="nav-link text-start {{ $active === 'casm' ? 'active' : '' }}"
                                    type="button" role="tab"
                                    wire:click="setActive('casm')"
                                    aria-controls="pane-recrystallization" aria-selected="false">
                                <i class="fas fa-gem me-2 text-warning"></i> CASM
                            </button>
                            <button class="nav-link text-start {{ $active === 'dft-fe' ? 'active' : '' }}"
                                    type="button" role="tab"
                                    wire:click="setActive('dft-fe')"
                                    aria-controls="pane-tensile" aria-selected="false">
                                <i class="fas fa-arrows-left-right me-2 text-danger"></i> DFT-FE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="col-12 col-lg-8">
            <div class="tab-content">

                @if($active == "overview")
                    <div class="tab-pane fade {{ $active === 'overview' ? 'show active' : '' }}"
                         role="tabpanel" aria-labelledby="tab-overview">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.codes.includes.overview')
                            </div>
                        </div>
                    </div>
                @endif

                @if($active == "prisms-pf")
                    <div class="tab-pane fade {{ $active === 'prisms-pf' ? 'show active' : '' }}"
                         role="tabpanel">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.codes.includes.prisms-pf')
                            </div>
                        </div>
                    </div>
                @endif

                @if ($active == "casm")
                    <div class="tab-pane fade {{ $active === 'casm' ? 'show active' : '' }}"
                         role="tabpanel">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.codes.includes.casm')
                            </div>
                        </div>
                    </div>
                @endif

                @if($active == "dft-fe")
                    <div class="tab-pane fade {{ $active === 'dft-fe' ? 'show active' : '' }}"
                         role="tabpanel">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.codes.includes.dft-fe')
                            </div>
                        </div>
                    </div>
                @endif

                @if($active == "plasticity")
                    <div class="tab-pane fade {{ $active === 'plasticity' ? 'show active' : '' }}"
                         role="tabpanel" aria-labelledby="tab-fatigue">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.codes.includes.prisms-plasticity')
                            </div>
                        </div>
                    </div>
                @endif

                @if($active == "multi-physics")
                    <div class="tab-pane fade {{ $active === 'multi-physics' ? 'show active' : '' }}"
                         role="tabpanel" aria-labelledby="tab-fatigue">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.codes.includes.prisms-multi-physics')
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>>


