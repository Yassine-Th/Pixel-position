<x-layout>
	<div class="space-y-10 pt-6">
		<section class="text-center">
			<h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
			<form action="" class="mt-6">
				<input type="text" placeholder="web Developer..." class="rounded-xl bg-white/15 border-white/10 px-5 py-4 w-full max-w-xl ">
			</form>
		</section>
		<section class="pt-10">
			<x-section>Featured Jobs</x-section>
			<div class=" grid lg:grid-cols-3 gap-8 mt-6">
				<x-job-card/>
				<x-job-card/>
				<x-job-card/>
			</div>
	</section>

	<section>
		<x-section>Tags</x-section>
 			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
			<x-tag>tag</x-tag>
		</div>	
	</section>

	<section class="mt-6">
		<x-section>Recent Jobs</x-section>
		<div class="mt-6 space-y-6 " >
			<x-job-wide-card/>
			<x-job-wide-card/>
			<x-job-wide-card/>
		</div>
	</section>
</div>		
</x-layout>