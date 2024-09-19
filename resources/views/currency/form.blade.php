<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Currency Converter</h1>
        <form id="currency-form" action="/currency" method="post">
            @csrf
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="from_currency">From:</label>
                <select id="from_currency" name="from_currency" class="form-control" required>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="VND">VNĐ</option>
                    <!-- Add more currencies as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="to_currency">To:</label>
                <select id="to_currency" name="to_currency" class="form-control" required>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="VND">VNĐ</option>
                    <!-- Add more currencies as needed -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Convert</button>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">Conversion Result</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <!-- Conversion result will be displayed here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('currency-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('modal-body').innerHTML = `${data.amount} ${data.fromCurrency} is equal to ${data.convertedAmount} ${data.toCurrency}`;
                    $('#resultModal').modal('show');
                } else {
                    alert('Failed to retrieve exchange rates. Please try again later.');
                }
            });
        });
    </script>
</body>
</html>