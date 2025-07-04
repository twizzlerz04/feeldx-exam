<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const currentYear = new Date().getFullYear();

const isScrolled = ref(false);

const navHeight = ref('120px') // Approximate height of your sticky nav

const heroSection = ref(null)
const servicesSection = ref(null)
const clientsSection = ref(null)
const testimonials = ref(null)

const handleParallax = () => {
    const sections = [
        { ref: heroSection, rate: 0.5 },
        { ref: servicesSection, rate: 0.3 },
        { ref: clientsSection, rate: 0.3 },
        { ref: testimonials, rate: 0.3 }
    ]

    sections.forEach(({ ref, rate }) => {
        if (!ref.value) return

        const rect = ref.value.getBoundingClientRect()
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0
        
        if (isVisible) {
            // Account for the nav height (120px) in the scroll calculation
            const scrolled = window.pageYOffset - (rect.top + window.pageYOffset - 120)
            const translateY = scrolled * rate
            
            // Apply parallax effect to section content
            const content = ref.value.querySelector('.section-content')
            if (content) {
                content.style.transform = `translateY(${translateY}px)`
                content.style.opacity = 1 - (Math.abs(scrolled) / (window.innerHeight * 0.5))
            }
        }
    })
}

const handleScroll = () => {
    isScrolled.value = window.scrollY > 0;
};



const scrollToSection = (sectionId) => {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('scroll', handleParallax)
    const nav = document.querySelector('header')
    if (nav) {
        navHeight.value = `${nav.offsetHeight}px`
    }
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
    window.removeEventListener('scroll', handleParallax)
});
</script>
<template>
    <div>
        <header :class="[
                'sticky top-0 z-50 transition-all duration-300',
                isScrolled ? 'bg-white/95 backdrop-blur-sm shadow-md' : 'bg-white'
            ]">
            <!-- Logo Nav -->
            <nav class="border-b border-gray-100">
                <div class="flex flex-wrap justify-center items-center mx-auto max-w-screen-xl p-4">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse transition-transform hover:scale-105">
                        <svg width="164" height="42" viewBox="0 0 164 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.168 42H47.3525V37.0649H31.1528V25.9612H47.3525V21.0261H31.1528V9.92186H47.3525V4.98732H26.168V42Z" fill="#101010"></path>
                            <path d="M0 42H4.9848V25.9612H21.1834V21.0261H4.9848V9.92186H21.1834V4.98732H0V42Z" fill="#101010"></path>
                            <path d="M149.474 22.333L161.831 4.99901H155.729L146.423 18.0535L137.117 4.99901H131.015L143.372 22.333L129.361 41.9883H135.462L146.423 26.6124L157.384 41.9883H163.486L149.474 22.333Z" fill="#101010"></path>
                            <path d="M71.5475 21.0261H62.3047V25.9612H73.6128L83.107 16.5605V16.5577L83.6728 15.9982V-1.52588e-05H78.688V13.9574L71.5475 21.0261Z" fill="#101010"></path>
                            <path d="M83.6728 25.0972L78.688 30.0323V30.039L71.5913 37.0649H57.4125V9.92186H73.6129V4.98732H52.4277V42H73.6129V41.9572L73.6555 42L78.6936 37.0127H99.872V32.0776H83.6728V25.0972Z" fill="#101010"></path>
                            <path d="M116.285 4.99899V4.98732H103.826V32.0776H108.812V9.92241H116.285V9.93409C119.838 10.0532 123.204 11.534 125.674 14.0639C128.145 16.5938 129.525 19.9749 129.525 23.4937C129.525 27.0124 128.145 30.3935 125.674 32.9234C123.204 35.4533 119.838 36.9341 116.285 37.0532V37.0649H108.81V37.0104H103.826V41.9978H116.285V41.9861C121.146 41.8465 125.76 39.8368 129.149 36.3836C132.537 32.9304 134.432 28.3057 134.432 23.4914C134.432 18.6772 132.537 14.0525 129.149 10.5993C125.76 7.1461 121.146 5.13635 116.285 4.99676V4.99899Z" fill="#101010"></path>
                        </svg>
                    </a>
                </div>
            </nav>
            <!-- Main Nav -->
            <nav class="bg-white/75 backdrop-blur-sm">
                <div class="max-w-screen-xl px-4 py-3 mx-auto border-b">
                    <div class="flex justify-center items-center">
                        <ul class="flex flex-row font-medium mt-0 space-x-6 md:space-x-8 lg:space-x-12 rtl:space-x-reverse text-sm">
                            <li>
                                <a 
                                href="#intro" 
                                @click.prevent="scrollToSection('intro')" 
                                class="text-primary group relative px-2 py-4 transition-colors hover:text-primary-dark">
                                    <span>INTRO</span>
                                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 transition-transform group-hover:scale-x-100"></span>
                                </a>
                            </li>
                            <li>
                                <a 
                                href="#services" 
                                @click.prevent="scrollToSection('services')" 
                                class="text-primary group relative px-2 py-4 transition-colors hover:text-primary-dark">
                                    <span>SERVICES</span>
                                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 transition-transform group-hover:scale-x-100"></span>
                                </a>
                            </li>
                            <li>
                                <a 
                                href="#clients" 
                                @click.prevent="scrollToSection('clients')" 
                                class="text-primary group relative px-2 py-4 transition-colors hover:text-primary-dark">
                                    <span>CLIENTS</span>
                                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 transition-transform group-hover:scale-x-100"></span>
                                </a>
                            </li>
                            <li>
                                <a 
                                href="#testimonials" 
                                @click.prevent="scrollToSection('testimonials')" 
                                class="text-primary group relative px-2 py-4 transition-colors hover:text-primary-dark">
                                    <span>TESTIMONIALS</span>
                                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 transition-transform group-hover:scale-x-100"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- <nav class="bg-white border-gray-200 light:bg-gray-900">
                <div class="flex flex-wrap justify-center items-center mx-auto max-w-screen-xl p-6">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg width="164" height="42" viewBox="0 0 164 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.168 42H47.3525V37.0649H31.1528V25.9612H47.3525V21.0261H31.1528V9.92186H47.3525V4.98732H26.168V42Z" fill="#101010"></path>
                            <path d="M0 42H4.9848V25.9612H21.1834V21.0261H4.9848V9.92186H21.1834V4.98732H0V42Z" fill="#101010"></path>
                            <path d="M149.474 22.333L161.831 4.99901H155.729L146.423 18.0535L137.117 4.99901H131.015L143.372 22.333L129.361 41.9883H135.462L146.423 26.6124L157.384 41.9883H163.486L149.474 22.333Z" fill="#101010"></path>
                            <path d="M71.5475 21.0261H62.3047V25.9612H73.6128L83.107 16.5605V16.5577L83.6728 15.9982V-1.52588e-05H78.688V13.9574L71.5475 21.0261Z" fill="#101010"></path>
                            <path d="M83.6728 25.0972L78.688 30.0323V30.039L71.5913 37.0649H57.4125V9.92186H73.6129V4.98732H52.4277V42H73.6129V41.9572L73.6555 42L78.6936 37.0127H99.872V32.0776H83.6728V25.0972Z" fill="#101010"></path>
                            <path d="M116.285 4.99899V4.98732H103.826V32.0776H108.812V9.92241H116.285V9.93409C119.838 10.0532 123.204 11.534 125.674 14.0639C128.145 16.5938 129.525 19.9749 129.525 23.4937C129.525 27.0124 128.145 30.3935 125.674 32.9234C123.204 35.4533 119.838 36.9341 116.285 37.0532V37.0649H108.81V37.0104H103.826V41.9978H116.285V41.9861C121.146 41.8465 125.76 39.8368 129.149 36.3836C132.537 32.9304 134.432 28.3057 134.432 23.4914C134.432 18.6772 132.537 14.0525 129.149 10.5993C125.76 7.1461 121.146 5.13635 116.285 4.99676V4.99899Z" fill="#101010"></path>
                        </svg>
                    </a>
                </div>
            </nav>
            <nav class="bg-white light:bg-gray-700">
                <div class="max-w-screen-xl px-4 py-3 mx-auto">
                    <div class="flex justify-center items-center">
                        <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                            <li>
                                <a href="#" class="text-primary light:text-white mb-4 text-lg font-bold tracking-tight hover:underline" aria-current="page">INTRO</a>
                            </li>
                            <li>
                                <a href="#" class="text-primary light:text-white mb-4 text-lg font-bold tracking-tight hover:underline">SERVICES</a>
                            </li>
                            <li>
                                <a href="#" class="text-primary light:text-white mb-4 text-lg font-bold tracking-tight hover:underline">CLIENTS</a>
                            </li>
                            <li>
                                <a href="#" class="text-primary light:text-white mb-4 text-lg font-bold tracking-tight hover:underline">TESTIMONIALS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
             -->
        </header>

        <main class="pt-[calc(var(--nav-height, 150px))]">
            <slot />
        </main>
    </div>

    <footer class="bg-white light:bg-gray-700">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase light:text-white">Company</h2>
                    <ul class="text-gray-500 light:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Our Work</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">About Us</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">News</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase light:text-white">Products</h2>
                    <ul class="text-gray-500 light:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">Studio</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Project Control</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Services</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Technology</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Our Work</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase light:text-white">Legal</h2>
                    <ul class="text-gray-500 light:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mx-auto w-full max-w-screen-xl">
            <div class="px-4 py-6 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 light:text-gray-300 sm:text-center">© {{ currentYear }} <a href="https://flowbite.com/">FeelDX</a>. All rights reserved.
                </span>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                    <a href="#" class="text-gray-400 hover:text-gray-900 light:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 light:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                            </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 light:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 light:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 light:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
/* Add this to your existing styles */
#intro {
    scroll-margin-top: var(--nav-height, 120px);
}
:root {
    --nav-height: 120px;
}
.section-content {
    transition: transform 0.1s ease-out, opacity 0.1s ease-out;
    will-change: transform, opacity;
}

section {
    perspective: 1px;
    transform-style: preserve-3d;
    backface-visibility: hidden;
    overflow: hidden;
}
.backdrop-blur-lg {
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}
.transition-transform {
    transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    will-change: transform, opacity;
}
.carousel-item {
    transition: transform 0.5s ease-in-out;
}

/* Add smooth transitions for parallax elements */
[ref="heroContent"],
[ref="heroVideo"] {
    transition: transform 0.1s ease-out, opacity 0.1s ease-out;
    will-change: transform, opacity;
}

/* Ensure the section takes up full height and handles overflow properly */
#intro {
    perspective: 1px;
    transform-style: preserve-3d;
    backface-visibility: hidden;
}
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
}

.delay-200 {
    animation-delay: 200ms;
}

.delay-400 {
    animation-delay: 400ms;
}

.delay-600 {
    animation-delay: 600ms;
}

.delay-800 {
    animation-delay: 800ms;
}
</style>