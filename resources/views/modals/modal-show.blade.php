<div class="max-w-2xl mx-auto">
    @foreach ($students as $student)
        <div id="show-{{$student->id}}" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative w-full max-w-4xl px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="show-{{$student->id}}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <div class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8">
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label for="name" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Nombre completo</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="nombre" required value="{{$student->name}} {{$student->last_name}}" disabled>
                            </div>
                            <div>
                                <label for="age" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Edad</label>
                                <input type="text" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="edad" required value="{{$student->age}}" disabled>
                            </div>
                            <div>
                                <label for="birthday" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Fecha de nacimiento</label>
                                <input type="date" name="birthday" id="birthday" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="{{ old('birthday', $student->birthday->format('Y-m-d')) }}" disabled>
                            </div>
                            <div>
                                <label for="career" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Carrera</label>
                                <input type="text" name="career" id="career" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Carrera" required value="{{$student->career}}" disabled>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div> 
    @endforeach
</div>