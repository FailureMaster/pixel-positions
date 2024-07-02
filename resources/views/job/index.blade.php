<x-layout>
    <div class="space-y-10">

        <section class="text-center space-y-3">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="" method="post" class="mt-6">
                <input type="text" name="" id="" class=" w-full h-10 rounded-xl bg-white/5 border border-white/10 px-3 max-w-lg" placeholder="I'm looking for...">
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
           </div>
        </section>
        
        <section class="space-y-6">
            <x-section-heading>Recent Jobs</x-section-heading>
            <x-job-card-wide></x-job-card-wide>
            <x-job-card-wide></x-job-card-wide>
            <x-job-card-wide></x-job-card-wide>
        </section>
    </div>
</x-layout>