<div id="platform-selector" class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
    <h3 class="text-lg font-medium text-gray-900 mb-4">
        Available Platforms
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <button id="twitter" class="relative platform-btn flex flex-col items-center p-4 border rounded-lg hover:border-indigo-500 hover:bg-indigo-500/5 transition-colors border-indigo-500 ">
            <div class="absolute -top-1.5 -right-1.5 bg-green-500 rounded-full p-1">
                <x-feathericon-check class="text-white w-3 h-3"/>
            </div>
            <x-bi-twitter class="text-blue-400 h-5 w-5" />
            <span class="text-sm font-medium text-gray-700">Twitter</span>
        </button>
        <button id="facebook" class="relative platform-btn flex flex-col items-center p-4 border rounded-lg hover:border-indigo-500 hover:bg-indigo-500/5 transition-colors border-indigo-500 bg-indigo-500/5">
            <div class="absolute -top-1.5 -right-1.5 bg-red-500 rounded-full p-1">
                <x-feathericon-x class="text-white w-3 h-3"/>
            </div>
            <x-bi-facebook class="text-blue-600 h-5 w-5" />
            <span class="text-sm font-medium text-gray-700">Facebook</span>
        </button>
        <button id="instagram" class="relative platform-btn flex flex-col items-center p-4 border rounded-lg hover:border-indigo-500 hover:bg-indigo-500/5 transition-colors border-indigo-500 bg-indigo-500/5">
            <div class="absolute -top-1.5 -right-1.5 bg-red-500 rounded-full p-1">
                <x-feathericon-x class="text-white w-3 h-3"/>
            </div>
            <x-bi-instagram class="text-pink-500 h-5 w-5" />
            <span class="text-sm font-medium text-gray-700">Instagram</span>
        </button>
        <button id="tiktok" class="relative platform-btn flex flex-col items-center p-4 border rounded-lg hover:border-indigo-500 hover:bg-indigo-500/5 transition-colors border-indigo-500 bg-indigo-500/5">
            <div class="absolute -top-1.5 -right-1.5 bg-red-500 rounded-full p-1">
                <x-feathericon-x class="text-white w-3 h-3"/>
            </div>
            <x-fab-tiktok class="text-gray-800 h-5 w-5" />
            <span class="text-sm font-medium text-gray-700">Tiktok</span>
        </button>
    </div>
</div>
