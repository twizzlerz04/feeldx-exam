<script setup>
import { ref, onMounted } from 'vue'

const currentSlide = ref(0)
const totalSlides = 2
const autoPlayInterval = ref(null)
const navHeight = ref('150px')

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % totalSlides
}

const prevSlide = () => {
    currentSlide.value = (currentSlide.value - 1 + totalSlides) % totalSlides
}

const startAutoPlay = () => {
    autoPlayInterval.value = setInterval(nextSlide, 3000)
}

const stopAutoPlay = () => {
    if (autoPlayInterval.value) {
        clearInterval(autoPlayInterval.value)
    }
}

const testimonialSlide = ref(0)
const totalTestimonialSlides = 2 // 2 slides with 3 testimonials each
const testimonialInterval = ref(null)

const nextTestimonial = () => {
    testimonialSlide.value = (testimonialSlide.value + 1) % totalTestimonialSlides
}

const prevTestimonial = () => {
    testimonialSlide.value = (testimonialSlide.value - 1 + totalTestimonialSlides) % totalTestimonialSlides
}

const startTestimonialAutoPlay = () => {
    testimonialInterval.value = setInterval(nextTestimonial, 5000)
}

const stopTestimonialAutoPlay = () => {
    if (testimonialInterval.value) {
        clearInterval(testimonialInterval.value)
    }
}

onMounted(() => {
    startAutoPlay()
    startTestimonialAutoPlay()
})
</script>
<template>
    <!-- Hero -->
    <section 
        ref="heroSection" 
        id="intro" 
        class="relative w-full sm:mx-auto sm:pb-4 overflow-hidden bg-white light:bg-gray-900 lg:min-h-screen pt-10"
        style="height: 400px;"
    >
        <div class="grid max-w-screen-xl px-4 mx-auto lg:mt-30 lg:gap-8 xl:gap-0 lg:grid-cols-12">
            <div 
                class="relative z-10 mr-auto place-self-center lg:col-span-5"
            >
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-primary light:text-primary animate-fade-in-up">Plan</h1>
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-primary light:text-primary animate-fade-in-up delay-200">Visualise</h1>
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-primary light:text-primary animate-fade-in-up delay-400">Transform</h1>
                <p class="max-w-2xl pr-4 mb-6 font-light text-secondary lg:mb-8 md:text-lg lg:text-xl light:text-secondary animate-fade-in-up delay-600">We push beyond visual representation, integrating and connecting with your project's requirements, bringing them to life and enhancing clarity to create a truly immersive experience.</p>
                <a href="#" class="group inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-primary border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 light:text-primary light:border-gray-700 light:hover:bg-gray-700 light:focus:ring-gray-800 transition-all duration-300 ease-bounce hover:translate-x-1 animate-fade-in-up delay-800">
                    Book a Consultant
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a> 
            </div>
            <div 
                class="hidden lg:mt-0 lg:col-span-7 lg:flex relative z-0 items-center"
            >
                <div class="relative w-full" style="padding-bottom: 56.25%;">
                    <iframe 
                        src="https://player.vimeo.com/video/1049585198?autoplay=1&loop=1&muted=1&background=1&autopause=0"
                        class="absolute top-1/2 left-0 w-full h-full rounded-lg shadow-2xl -translate-y-1/2"
                        frameborder="0" 
                        allow="autoplay; fullscreen; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="py-16 bg-primary light:bg-gray-900">
        <div class="w-full max-w-screen-xl px-4 mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold tracking-tight text-white mb-4">Why Choose FEELDX</h2>
                <p class="text-lg text-white">We deliver excellence through innovation, expertise, and dedication</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Innovation Card -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Innovation First</h3>
                    <p class="text-secondary">Leading with cutting-edge technology and creative solutions to transform your project visualization experience.</p>
                </div>

                <!-- Expertise Card -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Industry Expertise</h3>
                    <p class="text-secondary">Deep understanding of BIM, construction, and project management, backed by years of industry experience.</p>
                </div>

                <!-- Results Card -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3">Proven Results</h3>
                    <p class="text-secondary">Consistent delivery of high-impact solutions that drive project success and client satisfaction.</p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="#" class="group inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg hover:bg-primary focus:ring-4 focus:bg-primary  light:text-white light:border-gray-700 light:hover:bg-primary light:focus:ring-gray-800 transition-all duration-300 ease-bounce hover:translate-x-1">
                    Start Your Project
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section 
        ref="servicesSection" 
        id="services" 
        class="py-4 bg-white text-white light:bg-gray-900"
        :style="{ paddingTop: navHeight }">
        <div class="w-full max-w-screen-xl px-4 py-8 mx-auto">
            <div class=" place-self-center">
                <h2 class="text-center text-4xl font-extrabold tracking-tight text-primary mb-2">Our Services</h2>
                <p class="max-w-6xl mb-6 font-medium text-secondary sm:text-sm md:text-lg lg:text-xl light:text-secondary">FeelDX delivers tailored visual solutions that drive clarity, engagement, and results. We elevate construction projects and business communications through advanced BIM (3D–7D), multimedia visualisation, and interactive content. From programme development to forensic analysis, our user-driven approach enhances project control, streamlines decision-making, and supports strategic goals. Trusted across sectors, we deliver high-impact content—from interiors to education—that aligns with your vision and maximises project success.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 services">
                <div class="card mx-auto max-w-md mb-1 overflow-hidden bg-white shadow-md md:max-w-2xl transition-all duration-300 ease-bounce hover:translate-x-2 border border-primary/20">
                    <div class="h-full md:flex">
                        <div class="p-8">
                            <a href="#" class="mt-1 block text-lg leading-tight font-medium text-primary hover:underline">
                                YOUR PARTNER FOR SUCCESS
                            </a>
                            <p class="mt-2 text-secondary light:text-secondary h-30 overflow-hidden line-clamp-4">
                                Collaborative, data-led, future-facing. At FeelDX, diverse expertise meets strategic insight—where solving together sparks standout solutions.
                            </p>
                        </div>
                        <div class="md:shrink-0 hidden lg:block">
                            <img
                                class="h-48 w-full object-cover md:h-full md:w-48"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%23475569'/%3E%3Cpath d='M17 14l-3-3-2 2-4-4-3 3V5h12v9z' fill='%23606F7B'/%3E%3Ccircle cx='16' cy='8' r='2' fill='%23CBD5E0'/%3E%3C/svg%3E"
                                alt="Placeholder image"
                            />
                        </div>
                    </div>
                </div>
                <div class="card mx-auto max-w-md mb-1 overflow-hidden bg-white shadow-md md:max-w-2xl transition-all duration-300 ease-bounce hover:-translate-x-2 border border-primary/20">
                    <div class="h-full md:flex">
                        <div class="md:shrink-0 hidden lg:block">
                            <img
                                class="h-48 w-full object-cover md:h-full md:w-48"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%23475569'/%3E%3Cpath d='M17 14l-3-3-2 2-4-4-3 3V5h12v9z' fill='%23606F7B'/%3E%3Ccircle cx='16' cy='8' r='2' fill='%23CBD5E0'/%3E%3C/svg%3E"
                                alt="Placeholder image"
                            />
                        </div>
                        <div class="p-8">
                            <a href="#" class="mt-1 block text-lg leading-tight font-medium text-primary hover:underline">
                                VISUALISATIONS
                            </a>
                            <p class="mt-2 text-secondary light:text-secondary h-30 overflow-hidden line-clamp-5">
                                Visual storytelling meets creative tech. FeelDX crafts immersive content with BIM expertise, multimedia visuals, and bespoke interior design—turning vision into experience.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="card mx-auto max-w-md mb-1 overflow-hidden bg-white shadow-md md:max-w-2xl transition-all duration-300 ease-bounce hover:translate-x-2 border border-primary/20">
                    <div class="h-full md:flex">
                        
                        <div class="p-8">
                            <a href="#" class="mt-1 block text-lg leading-tight font-medium text-primary hover:underline">
                                PROJECT CONTROL AND FORENSIC ANALYSIS
                            </a>
                            <p class="mt-2 text-secondary light:text-secondary h-30 overflow-hidden line-clamp-5">
                                Strategic oversight with industry precision. FeelDX drives project success with BIM-integrated planning, expert programme management, and forensic analysis—resolving disputes with data-backed insights.
                            </p>
                        </div>
                        <div class="md:shrink-0 hidden lg:block">
                            <img
                                class="h-48 w-full object-cover md:h-full md:w-48"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%23475569'/%3E%3Cpath d='M17 14l-3-3-2 2-4-4-3 3V5h12v9z' fill='%23606F7B'/%3E%3Ccircle cx='16' cy='8' r='2' fill='%23CBD5E0'/%3E%3C/svg%3E"
                                alt="Placeholder image"
                            />
                        </div>
                    </div>
                </div>
                <div class="card mx-auto max-w-md mb-1 overflow-hidden bg-white shadow-md md:max-w-2xl transition-all duration-300 ease-bounce hover:-translate-x-2 border border-primary/20">
                    <div class="h-full md:flex">
                        <div class="md:shrink-0 hidden lg:block">
                            <img
                                class="h-48 w-full object-cover md:h-full md:w-48"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%23475569'/%3E%3Cpath d='M17 14l-3-3-2 2-4-4-3 3V5h12v9z' fill='%23606F7B'/%3E%3Ccircle cx='16' cy='8' r='2' fill='%23CBD5E0'/%3E%3C/svg%3E"
                                alt="Placeholder image"
                            />
                        </div>
                        <div class="p-8">
                            <a href="#" class="mt-1 block text-lg leading-tight font-medium text-primary hover:underline">
                                CONSTRUCTION LIFE CYCLE
                            </a>
                            <p class="mt-2 text-secondary light:text-secondary h-30 overflow-hidden line-clamp-5">
                                Advanced planning for AEC success. FeelDX empowers architecture, engineering, and construction businesses with expert control strategies—winning bids and ensuring seamless execution.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-6 text-center">
                <a href="#" class="group inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-primary border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 light:text-primary light:border-gray-700 light:hover:bg-gray-700 light:focus:ring-gray-800 transition-all duration-300 ease-bounce hover:translate-x-1">
                    See all Services
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Client Logos Section -->
    <section 
        ref="clientsSection" 
        id="clients" 
        class="py-16 bg-primary light:bg-gray-900"
        :style="{ paddingTop: navHeight }"
        >
        <div class="w-full max-w-screen-xl px-4 mx-auto">
            <div class="text-center mb-16">
                <!-- <h2 class="text-3xl font-bold text-white mb-4">Our Clients</h2> -->
                <h2 class="text-4xl font-extrabold tracking-tight text-white mb-2">Our Clients</h2>
                <p class="text-white max-w-3xl mx-auto">
                    We help businesses thrive with cutting-edge technology and project control solutions and continue to work with an incredible portfolio of clients.
                </p>
            </div>

            <div class="relative px-12"> <!-- Added padding for arrow buttons -->
                <div class="overflow-hidden">
                    <!-- Carousel Container -->
                    <div 
                        class="flex transition-transform duration-500 ease-in-out"
                        :style="{ transform: `translateX(-${currentSlide * 100}%)` }"
                        @mouseenter="stopAutoPlay"
                        @mouseleave="startAutoPlay"
                    >
                        <!-- Logo Items -->
                        <div v-for="i in 2" :key="i" class="w-full flex-shrink-0">
                            <div class="grid grid-cols-3 gap-16 w-full">
                                <div v-for="j in 3" :key="j" class="aspect-square bg-gray-300 rounded-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button 
                    class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-all duration-200 flex items-center justify-center"
                    @click="prevSlide"
                >
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button 
                    class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-all duration-200 flex items-center justify-center"
                    @click="nextSlide"
                >
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 flex space-x-2">
                    <button 
                        v-for="i in totalSlides" 
                        :key="i"
                        @click="currentSlide = i - 1"
                        class="w-2 h-2 rounded-full transition-all duration-200"
                        :class="currentSlide === i - 1 ? 'bg-primary' : 'bg-gray-300'"
                    ></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section 
        ref="testimonials" 
        id="testimonials" 
        class="relative py-16 bg-white light:bg-gray-900"
        :style="{ paddingTop: navHeight }"
        >
        <div class="max-w-screen-xl px-4 mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-extrabold tracking-tight text-primary mb-2">Testimonials</h2>
                <p class="text-lg text-secondary">Trusted by industry leaders and innovators worldwide</p>
            </div>

            <div class="relative px-12">
                <div class="overflow-hidden">
                    <!-- Testimonial Carousel -->
                    <div 
                        class="flex transition-transform duration-500 ease-in-out"
                        :style="{ transform: `translateX(-${testimonialSlide * 100}%)` }"
                        @mouseenter="stopTestimonialAutoPlay"
                        @mouseleave="startTestimonialAutoPlay"
                    >
                        <!-- First Slide -->
                        <div class="w-full flex-shrink-0">
                            <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- First 3 testimonials -->
                                <div v-for="i in 3" :key="i" 
                                    class="bg-white p-8 rounded-lg shadow-lg relative transform transition-all duration-300 hover:-translate-y-1"
                                >
                                    <div class="absolute -top-4 left-8 text-primary opacity-20">
                                        <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 32 32">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                        </svg>
                                    </div>
                                    <blockquote class="relative z-10">
                                        <p class="text-lg text-secondary mb-4 h-29 overflow-hidden line-clamp-4">Their innovative approach to BIM visualization and project control has transformed how we manage large-scale construction projects.</p>
                                        <footer class="flex items-center space-x-4">
                                            <div>
                                                <span class="text-sm text-secondary">Project Director</span>
                                                <span class="block text-sm text-primary-soft">Global Construction Corp</span>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <!-- Second Slide -->
                        <div class="w-full flex-shrink-0">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                <!-- Second 3 testimonials -->
                                <div v-for="i in 3" :key="i+3" 
                                    class="bg-white p-8 rounded-lg shadow-lg relative transform transition-all duration-300 hover:-translate-y-1"
                                >
                                <div class="absolute -top-4 left-8 text-primary opacity-20">
                                        <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 32 32">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                        </svg>
                                    </div>
                                    <blockquote class="relative z-10">
                                        <p class="text-lg text-secondary mb-4 h-29 overflow-hidden line-clamp-4">Their innovative approach to BIM visualization and project control has transformed how we manage large-scale construction projects.</p>
                                        <footer class="flex items-center space-x-4">
                                            <div>
                                                <span class="text-sm text-secondary">Project Director</span>
                                                <span class="block text-sm text-primary-soft">Global Construction Corp</span>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button 
                    class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-all duration-200 flex items-center justify-center md:hidden lg:flex"
                    @click="prevTestimonial"
                >
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button 
                    class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-lg hover:bg-gray-50 transition-all duration-200 flex items-center justify-center md:hidden lg:flex"
                    @click="nextTestimonial"
                >
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 flex space-x-2">
                    <button 
                        v-for="i in totalTestimonialSlides" 
                        :key="i"
                        @click="testimonialSlide = i - 1"
                        class="w-2 h-2 rounded-full transition-all duration-200"
                        :class="testimonialSlide === i - 1 ? 'bg-primary' : 'bg-gray-300'"
                    ></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-primary text-white light:bg-gray-900">
        <div class="max-w-screen-xl px-4 mx-auto text-center">
            <h2 class="text-3xl font-extrabold mb-4">Ready to Transform Your Vision into Reality?</h2>
            <p class="text-lg mb-8">Contact us today to discuss how we can help you achieve your project goals with our innovative solutions.</p>
            <a href="#" class="group inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg hover:bg-primary focus:ring-4 focus:bg-primary  light:text-white light:border-gray-700 light:hover:bg-primary light:focus:ring-gray-800 transition-all duration-300 ease-bounce hover:translate-x-1">
                Get in Touch
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </section>
</template>

<style scoped>
@media (max-width: 1023px) {
  #intro {
    min-height: 400px !important;
    height: 400px !important;
  }
}
.carousel-item {
    transition: transform 0.5s ease-in-out;
}
</style>