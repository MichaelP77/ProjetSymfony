import { Application } from 'stimulus';

// Create a new Stimulus application
const application = Application.start();

// Automatically discover and register Stimulus controllers from your modules
autoload(require.context('./controllers', true, /\.js$/), application);

