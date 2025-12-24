<nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                            <rect width="100" height="100" rx="20" fill="#007bff" />
                            <path d="M 25 25 L 75 25 L 75 35 L 55 35 L 55 75 L 45 75 L 45 35 L 25 35 Z"
                                fill="#ffffff" />
                            <path d="M 30 40 L 70 40 L 70 45 L 30 45 Z" fill="#ffffff" opacity="0.7" />
                            <path d="M 35 50 L 65 50 L 65 55 L 35 55 Z" fill="#ffffff" opacity="0.5" />
                            <path d="M 40 60 L 60 60 L 60 65 L 40 65 Z" fill="#ffffff" opacity="0.3" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gray-900">TaskForge</span>
                </div>
                @guest
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-gray-900">Features</a>
                    <a href="#workflow" class="text-gray-600 hover:text-gray-900">Workflow</a>
                    <a href="#pricing" class="text-gray-600 hover:text-gray-900">Pricing</a>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-gray-700 hover:text-gray-900 font-medium">Log in</a>
                    <a href="/register"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                        Get started free
                    </a>
                </div>
                @endguest
                @auth
                <div>
                    <a href="/dashboard"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                        Go to Dashboard
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </nav>