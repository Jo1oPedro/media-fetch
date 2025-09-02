<div id="recent-downloads" class="bg-white rounded-lg border border-gray-200 p-6">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-medium text-gray-900">Recent Downloads</h3>
        <span class="text-sm text-indigo-500 hover:text-indigo-500/80 cursor-pointer">View all</span>
    </div>

    <div class="space-y-4">
        <div class="flex flex-col md:flex-row items-center gap-4 p-4 bg-gray-50 rounded-lg">
            <div class="flex gap-4">
                <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-500 rounded-lg flex items-center justify-center">
                    <x-bi-instagram class="text-white h-5 w-5" />
                </div>
                <div class="flex-1">
                    <p class="font-medium text-gray-900">
                        Instagram Video
                    </p>
                    <p class="text-sm text-gray-500">
                        Downloaded 2 hours ago
                    </p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">
                    Completed
                </span>
                <button class="p-2 text-gray-400 hover:text-gray-600 cursor-pointer">
                    <x-eva-download-outline class="w-4 h-4"/>
                </button>
            </div>
        </div>
    </div>
</div>
