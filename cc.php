<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playschool Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Child's Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter child's name" required>
            </div>
            <div class="mb-3">
                <label for="parentName" class="form-label">Parent's Name</label>
                <input type="text" class="form-control" id="parentName" placeholder="Enter parent's name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" required>
            </div>
            <div class="mb-3">
                <label for="service" class="form-label">Select Service</label>
                <select class="form-select" id="service" required>
                    <option selected disabled>Choose a service</option>
                    <option value="daycare">Daycare</option>
                    <option value="preschool">Preschool</option>
                    <option value="kindergarten">Kindergarten</option>
                    <option value="afterSchool">After School Programs</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
