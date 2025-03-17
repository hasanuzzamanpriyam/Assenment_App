# API Testing Guide

This document provides instructions for testing the APIs defined in the `routes/api.php` file of the Laravel application.

## Prerequisites

1. Ensure the application is running locally or on a server.
2. Install a tool for API testing, such as:
   - [Postman](https://www.postman.com/)
   - [cURL](https://curl.se/)
   - [HTTPie](https://httpie.io/)

3. Verify that the database is seeded with the necessary data for testing.

## API Endpoints

### Blog Post CRUD API

1. **Create a Post**
   - **Method:** `POST`
   - **Endpoint:** `/api/posts`
   - **Request Body:**
     ```json
     {
       "title": "Sample Post",
       "content": "This is a sample blog post."
     }
     ```
   - **Response:** Returns the created post details.

2. **Get All Posts**
   - **Method:** `GET`
   - **Endpoint:** `/api/posts`
   - **Response:** Returns a list of all blog posts.

3. **Get a Single Post**
   - **Method:** `GET`
   - **Endpoint:** `/api/posts/{id}`
   - **Path Parameter:** `id` - The ID of the post.
   - **Response:** Returns the details of the specified post.

---

### User Registration API

1. **Register a User**
   - **Method:** `POST`
   - **Endpoint:** `/api/register`
   - **Request Body:**
     ```json
     {
       "name": "John Doe",
       "email": "john.doe@example.com",
       "password": "password123"
     }
     ```
   - **Response:** Returns the registered  detailsuser.

---

### Task Management API

1. **Create a Task**
   - **Method:** `POST`
   - **Endpoint:** `/api/tasks`
   - **Request Body:**
     ```json
     {
       "title": "Sample Task",
       "description": "This is a sample task."
     }
     ```
   - **Response:** Returns the created task details.

2. **Mark Task as Completed**
   - **Method:** `PATCH`
   - **Endpoint:** `/api/tasks/{id}`
   - **Path Parameter:** `id` - The ID of the task.
   - **Request Body:**
     ```json
     {
       "completed": true
     }
     ```
   - **Response:** Returns the updated task details.

3. **Get Pending Tasks**
   - **Method:** `GET`
   - **Endpoint:** `/api/tasks/pending`
   - **Response:** Returns a list of all pending tasks.

---

## Testing Instructions

1. Use the API testing tool of your choice to send requests to the endpoints.
2. Ensure the `Content-Type` header is set to `application/json` for requests with a body.
3. Verify the responses match the expected output.

## Notes

- Replace `http://localhost` with your application's base URL if testing on a server.
- Ensure proper authentication if required for any endpoint.
