<div class="max-w-2xl mx-auto">
    @foreach ($students as $student)
        <div id="delete-{{$student->id}}" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete-{{$student->id}}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" method="POST" action="{{route('students.destroy', $student->id)}}">
                        @method('DELETE')
                        @csrf
                    
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white text-center">Deseas eliminar al estudiante: <br> {{$student->name}} {{$student->last_name}}</h3>
                        
                        
                        <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>
                        
                    </form>
                </div>
            </div>
        </div> 
    @endforeach
</div>