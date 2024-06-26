<form id="deleteWeightForm" action="{{ route('weight-destroy', ['id' => 0]) }}" method="POST">
    @csrf
    @method('DELETE')
    <div id="deleteWeightModal" class="modal delete-modal">
        <div class="modal-content">
            <div class="modal-header">Delete Weight Log</div>
            <div class="modal-body">
                <div class="modal-row">
                  <p>Are you sure you want to delete the weight log below?</p>
                </div>
                <div class="modal-row">
                    <div class="delete-modal-field col-6">
                        <label for="deleteDate">Date</label>
                        <span id="deleteDate"></span>
                    </div>
                    <div class="delete-modal-field col-6">
                        <label for="deleteWeight">Weight</label>
                        <span id="deleteWeight"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel-button" onclick="closeDeleteModal()">Cancel</button>
                <button type="submit" class="delete-button">Delete</button>
            </div>
        </div>
    </div>
</form>