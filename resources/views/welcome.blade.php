<x-layout>

<!-- HERO -->
<section class="min-h-screen flex items-center justify-center text-center px-6">
    <div class="max-w-4xl">
        <h1 class="text-5xl md:text-6xl font-bold">
            Hi, I'm <span class="text-cyan-400">Usman Bello</span>
        </h1>

        <p class="mt-6 text-xl text-slate-300">
            DevOps Engineer | Cloud Infrastructure | CI/CD | Kubernetes
        </p>

        <div class="mt-10 flex justify-center gap-4">
            <a href="#projects"
               class="px-6 py-3 bg-cyan-500 hover:bg-cyan-600 rounded-lg font-semibold transition">
                View Projects
            </a>

            <a href="#contact"
               class="px-6 py-3 border border-slate-600 rounded-lg hover:border-cyan-400 transition">
                Contact Me
            </a>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section class="py-24 bg-slate-900">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">DevOps Skills</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6 bg-slate-800 rounded-xl">
                <h3 class="font-semibold text-xl mb-4">Cloud & Infra</h3>
                <p class="text-slate-400">
                    Azure, AWS, ARM, Bicep, Terraform, Linux
                </p>
            </div>

            <div class="p-6 bg-slate-800 rounded-xl">
                <h3 class="font-semibold text-xl mb-4">CI/CD</h3>
                <p class="text-slate-400">
                    Azure DevOps, GitHub Actions, GitOps
                </p>
            </div>

            <div class="p-6 bg-slate-800 rounded-xl">
                <h3 class="font-semibold text-xl mb-4">Containers</h3>
                <p class="text-slate-400">
                    Docker, Kubernetes (AKS), Helm, Nginx
                </p>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="py-24">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Projects</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="p-6 bg-slate-800 rounded-xl">
                <h3 class="text-xl font-semibold mb-2">
                    Laravel CI/CD on Azure
                </h3>
                <p class="text-slate-400 mb-4">
                    End-to-end CI/CD using Azure DevOps and App Service.
                </p>
                <span class="text-cyan-400 text-sm">
                    Azure DevOps • Laravel • Linux
                </span>
            </div>

            <div class="p-6 bg-slate-800 rounded-xl">
                <h3 class="text-xl font-semibold mb-2">
                    AKS Migration
                </h3>
                <p class="text-slate-400 mb-4">
                    Migrated workloads to AKS with monitoring.
                </p>
                <span class="text-cyan-400 text-sm">
                    AKS • Helm • Prometheus
                </span>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-24 bg-slate-900 text-center">
    <h2 class="text-3xl font-bold mb-6">Get In Touch</h2>

    <p class="text-slate-400 mb-10">
        Open to DevOps roles and cloud consulting.
    </p>

    <a href="mailto:usman@example.com"
       class="px-8 py-4 bg-cyan-500 hover:bg-cyan-600 rounded-lg font-semibold">
        Email Me
    </a>
</section>

</x-layout>
