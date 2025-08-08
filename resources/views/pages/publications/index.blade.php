<x-layouts.prisms :title="'PRISMS Science'">
    <style>
        /* Page-specific styles for Science page */
        .science-hero {
            background: linear-gradient(135deg, #f8f9fa 0%, #eef2f7 100%);
            border-radius: .75rem;
        }

        .nav-pills .nav-link {
            border-radius: .5rem;
        }

        .nav-pills .nav-link.active {
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.08);
        }

        .tab-pane .card {
            border: 0;
        }

        .tab-pane .card + .card {
            margin-top: 1rem;
        }

        .icon-circle {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
        }

        /* Ensure sticky sidebar has room under fixed navbar */
        @media (min-width: 992px) {
            .science-sticky {
                top: 2rem;
            }
        }
    </style>

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

    <livewire:prisms.navs.science/>

</x-layouts.prisms>
