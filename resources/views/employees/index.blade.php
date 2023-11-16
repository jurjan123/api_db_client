<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-600">
    <x-sidebar></x-sidebar>
    <div class=" min-h-fit min-w-fit mt-8 ml-72">
           
        <div class="flex ">
          <input type="text" class="w-96 p-2 h-10 mb-4 rounded" id="searchterm" name="searchtem">
          
         
          <button class="bg-blue-400 rounded-md h-10 p-2" onclick="search()">
            <i class="bi bi-search text-xl mt-1 cursor-pointer"></i>
          </button>
        
          
         
        </div>
        <div class="shadow-lg rounded-lg overflow-hidden ">
         
            <table class="min-w-full  divide-y divide-gray-200 ">
              <thead>
                <tr>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Voornaam</th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Achternaam</th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Salaris</th>
                  
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">manager</th>
                 
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200" id="jur">
                @foreach($data["employees"] as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                      <div class="flex items-center">
                        <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">{{$item["firstName"]}} </div>
                        </div>
                      </div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-900">{{$item["lastName"]}}</div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-900">{{$item["email"]}}</div>
                      </td>
                    
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-900">{{$item["salary"]}}</div>
                      </td>
                     
                      <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-900">{{$item["manager_name"]}}</div>
                      </td>
                      
                    </tr>

                    @endforeach
                </tbody>
                
              </table>
              
            </div>
           
      
  </div>
 
</body>
</html>


<br>


