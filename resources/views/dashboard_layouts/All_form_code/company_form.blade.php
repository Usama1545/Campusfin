<div class="container mt-5">
    <h1 class="mb-4">Company Form</h1>
    <form action="submit.php" method="POST">
      <div class="mb-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="companyName" name="companyName" required>
      </div>
      <div class="mb-3">
        <label for="companyWebsite" class="form-label">Company Website</label>
        <input type="url" class="form-control" id="companyWebsite" name="companyWebsite" required>
      </div>
      <div class="mb-3">
        <label for="companyGitHub" class="form-label">Company GitHub</label>
        <input type="url" class="form-control" id="companyGitHub" name="companyGitHub">
      </div>
      <div class="mb-3">
        <label for="companySocialMedia" class="form-label">Company Social Media</label>
        <input type="url" class="form-control" id="companySocialMedia" name="companySocialMedia">
      </div>
      <div class="mb-3">
        <label for="previousProject" class="form-label">Previous Project</label>
        <input type="text" class="form-control" id="previousProject" name="previousProject">
      </div>
      <div class="mb-3">
        <label for="companyCommentsId" class="form-label">Company Comments ID</label>
        <input type="text" class="form-control" id="companyCommentsId" name="companyCommentsId" required>
      </div>
      <div class="mb-3">
        <label for="companyComments" class="form-label">Company Comments</label>
        <textarea class="form-control" id="companyComments" name="companyComments" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
