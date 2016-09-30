# Webidemic
####This is a on-going project that initially started at HacktheNorth 2016.
####Great thanks to [Alya](https://github.com/hacktheverse/Webidemic] who helped me with the Google Map API implementation 

##Backgroud Story
Polished Version:
We were stuck, lost, and exploring the vast and exotic world of APIs, when we came across one that provided us with a tally of the frequency with which certain prominent, transmissible diseases had been documented in the U.S. Endowed with such knowledge, we knew we had no choice, but to implement something that could really put its value into perspective.

Actual story:
We originally wanted to create an 3D Drawing App that will allow you to use your phone to draw in 3D space. I implemented a script that enable the user to create a mesh. However, the integration between the phone and the object in Unity did not succeed.
This project failed
And we only have 15 hours left before submission. 
We decided to throw ourselves into the group of exhausted sponsors at 6pm, trying to look for some dataset that will spark an idea. 
And then we encountered Google's epidemic data.
And this is how the project started. 

##What it does
Webidemic is a website that displays the density of a number of prominent diseases in the U.S. throughout the country's history. It elaborates on how the information gathered from this API could be relevant to current and future disease-spreading illustrates the changes in disease frequency with the passage of time and provides an insight into how we may predict the migrations of diseases in the future.

##Problem
My original idea was to train a model that will be able to predict the 
future location of the disease. However, after examing the data, I discovered that there are no enough of information provided for each instance to create a model for prediction. So I decided to first analyze the dataset to see if there is a possibility to extract any extra information. 

##Data
Google Cloud Epidemic dataset was provided by datalgov. The dataset is 36M and contains around 0.7 million instances, so simple notebook was able to process the data in relatively fast speed. 

Here is a set of sample of the raw data
![alt text][rawsample]

The epidemic disease contained in the datasets were:
`PERTUSSIS|POLIO|HEPATITIS A|MEASLES|RUBELLA|SMALLPOX|MUMPS|DIPHTHERIA`

The dataset contianed reports from all states in the USA from year 1916 to 2011, which is 51 years of reports. 

This is the distribution of each disease.
![alt text][datatable]

In order to see the distribution of the data, we take a scatterplot of the year and the cases of each disease, with each disease colored with a different color.
Here is the graph of the scatterplot of the dataset:
![alt text][scatterplot]
As you can see Measles is dominating and have been the most infectious disease from 1920 to 1970

##Approach
(Talk about the heat map)
Our original idea was to create a heat map that demonstrates the density and spread of epidemic diseases over time. We used the epidemic dataset provided on Google Cloud and analyzed the data using pandas, matplotlib, and python notebooks.
We create a basic map using google API that was able to 

##Current status
(Set up the website for Webidemic)
![alt text][screenshot]

##Future Directions
We originally wanted to predict the migration of the most popular epidemics using Recurrent Neural Networks, a deep learning algorithm that has the ability to predict time series data. However, the data provided from the google cloud services and various government release datasets do not contain extra information other than the report date and the type of disease recorded. One of the major challenges for building a predictive model for disease is the scarce of data. As seen in the data provided by data.gov, each report often have little information that will allow Data Scientist to extra a feature matrix out. One of the plausible approach is instead of looking for features related to the report or patient, we can collect extra information regarding the report date to find important features. 
Currently, I am searching for population report data and weather report data for extra information. 

####Which model should I choose?
(What can't classfier do the job?)
The problem that we are trying to predict is a time series problem. Long Short Term Memroy, a type of Recurrent Neural Network, is well know for its ability to predict time series data. The forget Gate allows LSTM to forgot instances that occured far in the past to make sure the model always adapt to the most recent pattern of the data. The input and output Gate ensures the quality of the input and the output of the model.


(Talk about LSTM and how it will work, what data do we need)

Here is a link to my blog post that explains LSTM in more detail
(Link to Blog)
Here is my LSTM implementation using tensorflow
(Link to Github)



[screenshot]: https://github.com/rolinawu/Webidemic/blob/master/screenshot.jpg

[randomsample]: https://github.com/rolinawu/Webidemic/randomsample.jpg

[scatterplot]: https://github.com/rolinawu/Webidemic/blob/master/scatterplot.jpg 

[Datatable]: https://github.com/rolinawu/Webidemic/blob/master/Datatable.jpg  
