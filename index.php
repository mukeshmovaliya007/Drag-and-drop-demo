<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js"></script>  
        <link rel="stylesheet" href="./style.css">      
    </head>
    <body>
        <h1>Drag & Drop<br/><span>Mukesh Movaliya</span></h1>
        <div class="add-task-container">
          <input type="text" maxlength="12" id="taskText" placeholder="New Task..." onkeydown="if (event.keyCode == 13)
            document.getElementById('add').click()">
          <button id="add" class="button add-button" onclick="addTask()">Add New Task</button>
        </div>
        
        <div class="main-container">
          <ul class="columns" style="width: 100%;display: inline;">
        
            <li class="column to-do-column" style="width: 100%;">
              <div class="column-header">
                <h4>To Do</h4>
              </div>
              <ul class="task-list" id="to-do">
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Analysis</p>
                </li>
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Coding</p>
                </li>
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Card Sorting</p>
                </li>
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Measure</p>
                </li>
              </ul>
            </li>
        
            <li class="column doing-column" style="width: 100%;">
              <div class="column-header">
                <h4>Doing</h4>
              </div>
              <ul class="task-list" id="doing">
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Hypothesis</p>
                </li>
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>User Testing</p>
                </li>
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Prototype</p>
                </li>
              </ul>
            </li>
        
            <li class="column done-column" style="width: 100%;">
              <div class="column-header">
                <h4>Done</h4>
              </div>
              <ul class="task-list" id="done">
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Ideation</p>
                </li>
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Sketches</p>
                </li>
              </ul>
            </li>
        
            <li class="column trash-column" style="width: 100%;">
              <div class="column-header">
                <h4>Trash</h4>
              </div>
              <ul class="task-list" id="trash">
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Interviews</p>
                </li>
                <li class="task" style="width: 24%;display: inline-flex;">
                  <p>Research</p>
                </li>
        
              </ul>
              <div class="column-button">
                <button class="button delete-button" onclick="emptyTrash()">Delete</button>
              </div>
            </li>
        
          </ul>
        </div>
    </body>
</html>
<script src="./custom.js"></script>



