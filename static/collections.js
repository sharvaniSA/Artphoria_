// Define your collection data
const collections = [
    {
        id: "sketch-collection",
        type: "Sketch",
        items: [
            {
                title: "Sketch 1",
                category: "Sketch",
                artist: "Artist Name 1",
                image: "../assets/sketch1.jpg",
            },
            {
                title: "Sketch 2",
                category: "Sketch",
                artist: "Artist Name 2",
                image: "../assets/sketch2.jpg",
            },
            {
                title: "Sketch 3",
                category: "Sketch",
                artist: "Artist Name 3",
                image: "../assets/sketch3.jpg",
            },
        ],
    },
    {
        id: "paint-collection",
        type: "Paint",
        items: [
            {
                title: "Paint 1",
                category: "Paint",
                artist: "Artist Name 1",
                image: "../assets/paint1.jpg",
            },
            {
                title: "Paint 2",
                category: "Paint",
                artist: "Artist Name 2",
                image: "../assets/paint2.jpg",
            },
            {
                title: "Paint 3",
                category: "Paint",
                artist: "Artist Name 3",
                image: "../assets/paint3.jpg",
            },
        ],
    },
    {
        id: "watercolor-collection",
        type: "Watercolor",
        items: [
            {
                title: "Watercolor 1",
                category: "Watercolor",
                artist: "Artist Name 1",
                image: "../assets/watercolor1.jpg",
            },
            {
                title: "Watercolor 2",
                category: "Watercolor",
                artist: "Artist Name 2",
                image: "../assets/watercolor2.jpg",
            },
            {
                title: "Watercolor 3",
                category: "Watercolor",
                artist: "Artist Name 3",
                image: "../assets/watercolor3.jpg",
            },
        ],
    },
];


// Function to display a collection when a collection item is clicked
function showCollection(collectionType) {
    const collectionContent = document.getElementById("collection-content");

    // Load and display the collection content based on collectionType
    let collectionContentHTML = "";

    const filteredCollection = collections.find(collection => collection.type === collectionType);
    filteredCollection.items.forEach(item => {
        collectionContentHTML += `
            <div class="collection-item" >
                <img src="${item.image}" alt="${item.title}">
                <p>Title: ${item.title}</p>
                <p>Category: ${item.category}</p>
                <p>Artist: ${item.artist}</p>
            </div>
        `;
    });

    collectionContent.innerHTML = `
        <h2 style = "text-align:center;">${collectionType}</h2>
        <br>
        <div class="collection">
            ${collectionContentHTML}
        </div>
    `;

    // Remove the "hidden" class to make it visible
    collectionContent.classList.remove("hidden");
}

// Add click event listeners to your collection items
collections.forEach(collection => {
    const collectionItem = document.getElementById(collection.id);
    if (collectionItem) {
        collectionItem.addEventListener("click", () => {
            showCollection(collection.type);
        });
    }
});

// Function to handle search input
function handleSearch() {
    const searchInput = document.getElementById("search-input");
    const searchQuery = searchInput.value.toLowerCase();

    // Display collections that match the search query
    collections.forEach(collection => {
        const collectionItem = document.getElementById(collection.id);
        if (collectionItem) {
            const collectionType = collection.type.toLowerCase();
            const filteredItems = collection.items.filter(item =>
                item.title.toLowerCase().includes(searchQuery) ||
                item.category.toLowerCase().includes(searchQuery) ||
                item.artist.toLowerCase().includes(searchQuery)
            );
            if (filteredItems.length > 0) {
                collectionItem.style.display = "block";
            } else {
                collectionItem.style.display = "none";
            }
        }
    });
}

// Add input event listener to the search input
const searchInput = document.getElementById("search-input");
if (searchInput) {
    searchInput.addEventListener("input", handleSearch);
}
