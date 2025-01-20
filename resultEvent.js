const events = [
    {
      name: 'Event 1',
      date: '2023-06-10',
      price: 50,
      location: 'New York'
    },
    {
      name: 'Event 2',
      date: '2023-06-05',
      price: 30,
      location: 'Los Angeles'
    },
    {
      name: 'Event 3',
      date: '2023-06-15',
      price: 40,
      location: 'Chicago'
    },
    
  ];

  function displayEvents(eventList) {
    const eventResults = document.getElementById('event-results');
    eventResults.innerHTML = '';

    eventList.forEach(event => {
      const eventCard = document.createElement('div');
      eventCard.classList.add('event');

      const eventName = document.createElement('h2');
      eventName.innerText = event.name;
      eventCard.appendChild(eventName);

      const eventDate = document.createElement('p');
      eventDate.innerText = `Date: ${event.date}`;
      eventCard.appendChild(eventDate);

      const eventPrice = document.createElement('p');
      eventPrice.innerText = `Price: $${event.price}`;
      eventCard.appendChild(eventPrice);

      const eventLocation = document.createElement('p');
      eventLocation.innerText = `Location: ${event.location}`;
      eventCard.appendChild(eventLocation);

      eventResults.appendChild(eventCard);
    });
  }

  function filterEvents() {
    const locationInput = document.getElementById('location-input');
    const location = locationInput.value.toLowerCase().trim();

    const filteredEvents = events.filter(event => event.location.toLowerCase().includes(location));

    displayEvents(filteredEvents);
  }

  function sortEvents() {
    const sortSelect = document.getElementById('sort-select');
    const sortBy = sortSelect.value;

    let sortedEvents;

    if (sortBy === 'date') {
      sortedEvents = events.sort((a, b) => new Date(a.date) - new Date(b.date));
    } else if (sortBy === 'price') {
      sortedEvents = events.sort((a, b) => a.price - b.price);
    }

    displayEvents(sortedEvents);
  }
  displayEvents(events);