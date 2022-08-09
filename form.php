    <div class="modal fade" id="taskmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding or Updating task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" id="addtask" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="taskName">Name</label>
                            <input style="height:1.9em;" type="text" class="form-control" placeholder="enter task"
                                required id="taskName" name="taskName">
                        </div>
                        <div class="form-group">
                            <label for="deadLine">deadLine</label>
                            <input style="height:1.9em;" type="date" class="form-control" placeholder="dead line"
                                required id="deadLine" name="deadLine">
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark" name="submit">submit</button>
            </div>
        </div>
    </div>
    </div>