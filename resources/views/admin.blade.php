<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Admin | Make A Way Foundation</title>

    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Public+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* ===== General ===== */
        body {
            margin: 0;
            font-family: "Public Sans", Arial, sans-serif;
            color: #23241f;
            background-color: #faf6ee;
            line-height: 1.6;
        }

        h1, h2 {
            font-family: "Fraunces", Georgia, serif;
            color: #1f5c5c;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        /* ===== Admin bar ===== */
        .admin-bar {
            background-color: #123b3b;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .admin-bar img {
            height: 55px;
            display: block;
        }

        .admin-bar .links {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-bar a {
            color: white;
            font-weight: bold;
        }

        .admin-bar button {
            background-color: #d9613f;
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        /* ===== Boxes ===== */
        .box {
            background-color: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .box h2 {
            margin-top: 0;
        }

        .success {
            background-color: #e6f2ef;
            color: #1f5c5c;
            border-radius: 10px;
            padding: 15px;
            font-weight: bold;
        }

        /* ===== Add event form ===== */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0 20px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-weight: bold;
            color: #123b3b;
            margin-bottom: 6px;
        }

        input,
        textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 2px solid #e3ddcd;
            border-radius: 10px;
            font-family: "Public Sans", Arial, sans-serif;
            font-size: 15px;
            margin-bottom: 15px;
        }

        .add-btn {
            background-color: #1f5c5c;
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .add-btn:hover {
            background-color: #d9613f;
        }

        .error {
            color: #c4502f;
            font-size: 14px;
            margin: -10px 0 12px 0;
        }

        /* ===== Tables ===== */
        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }

        th {
            background-color: #1f5c5c;
            color: white;
            text-align: left;
            padding: 10px;
        }

        td {
            border-bottom: 1px solid #e3ddcd;
            padding: 10px;
            vertical-align: top;
        }

        tr.past td {
            color: #999999;
        }

        .delete-btn {
            background-color: transparent;
            color: #c4502f;
            border: 2px solid #c4502f;
            border-radius: 8px;
            padding: 4px 10px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c4502f;
            color: white;
        }

        .count {
            background-color: #e2a33d;
            border-radius: 20px;
            padding: 2px 10px;
            font-weight: bold;
        }

        /* ===== Phones ===== */
        @media (max-width: 700px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Admin bar -->
    <div class="admin-bar">
        <img src="{{ asset('images/scroll/MWF-27.jpg') }}" alt="Make A Way Foundation logo">
        <div class="links">
            <a href="/get-involved" target="_blank">View Site</a>
            <form method="POST" action="/admin/logout">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        </div>
    </div>

    <div class="container">
        <h1>Admin Dashboard</h1>

        @if (session('success'))
            <p class="success"><i class="fa-solid fa-circle-check"></i> {{ session('success') }}</p>
        @endif

        <!-- Add event -->
        <div class="box">
            <h2>Add an Event</h2>

            <form method="POST" action="/admin/events">
                @csrf

                <div class="form-grid">
                    <div class="full">
                        <label for="title">Event Name *</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="event_date">Date *</label>
                        <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" required>
                        @error('event_date')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="event_time">Time</label>
                        <input type="text" id="event_time" name="event_time" value="{{ old('event_time') }}" placeholder="10 AM - 1 PM">
                    </div>

                    <div class="full">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location" value="{{ old('location') }}" placeholder="Athens, AL">
                    </div>

                    <div class="full">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    </div>
                </div>

                <button type="submit" class="add-btn"><i class="fa-solid fa-plus"></i> Add Event</button>
            </form>
        </div>

        <!-- Events -->
        <div class="box">
            <h2>Events ({{ $events->count() }})</h2>

            @if ($events->count() > 0)
                <div class="table-wrap">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Volunteers</th>
                            <th></th>
                        </tr>
                        @foreach ($events as $event)
                            <tr class="{{ $event->event_date->isPast() && ! $event->event_date->isToday() ? 'past' : '' }}">
                                <td>{{ $event->event_date->format('M j, Y') }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->event_time }}</td>
                                <td>{{ $event->location }}</td>
                                <td><span class="count">{{ $event->volunteers_count }}</span></td>
                                <td>
                                    <form method="POST" action="/admin/events/{{ $event->id }}" onsubmit="return confirm('Delete this event?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            @else
                <p>No events yet. Add one above.</p>
            @endif
        </div>

        <!-- Volunteers -->
        <div class="box">
            <h2>Volunteers ({{ $volunteers->count() }})</h2>

            @if ($volunteers->count() > 0)
                <div class="table-wrap">
                    <table>
                        <tr>
                            <th>Signed Up</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Event</th>
                            <th>Message</th>
                            <th></th>
                        </tr>
                        @foreach ($volunteers as $volunteer)
                            <tr>
                                <td>{{ $volunteer->created_at->format('M j, Y') }}</td>
                                <td>{{ $volunteer->name }}</td>
                                <td><a href="mailto:{{ $volunteer->email }}">{{ $volunteer->email }}</a></td>
                                <td>{{ $volunteer->phone }}</td>
                                <td>{{ $volunteer->event ? $volunteer->event->title : 'Any event' }}</td>
                                <td>{{ $volunteer->message }}</td>
                                <td>
                                    <form method="POST" action="/admin/volunteers/{{ $volunteer->id }}" onsubmit="return confirm('Remove this volunteer?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            @else
                <p>No volunteers have signed up yet.</p>
            @endif
        </div>
    </div>

</body>
</html>
