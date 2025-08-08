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
                <h1 class="h3 mb-1 text-primary fw-bold">Collaborative Research Excellence
                </h1>
                <p class="mb-0 text-muted">
                    The PRISMS Center brings together a distinguished team of researchers with extensive computational
                    and experimental expertise in materials science, forming a vibrant collaborative ecosystem that
                    drives innovation at the intersection of theory, simulation, and experimentation. Our center is
                    powered by accomplished faculty members and research scientists who lead groundbreaking
                    investigations, supported by a dynamic community of current and former PhD students and postdoctoral
                    researchers who contribute fresh perspectives and cutting-edge technical skills. This
                    multi-generational research environment fosters knowledge transfer, mentorship, and collaborative
                    problem-solving, enabling us to tackle complex materials science challenges through integrated
                    approaches that seamlessly combine advanced computational modeling with sophisticated experimental
                    characterization. Our team's diverse expertise spans quantum mechanics to continuum mechanics, from
                    atomistic simulations to macroscale testing, creating a unique interdisciplinary platform where
                    theoretical insights, computational predictions, and experimental validation work synergistically to
                    accelerate materials discovery and development for next-generation structural applications.
                </p>
            </div>
        </div>
    </div>

    <livewire:prisms.pages.people/>

</x-layouts.prisms>
