# Ocean Token Faucet

#### In this Project I have created OCT Token contract and a Faucet contract and with the faucet anyone can get 50 OCT/min

Have a look at clip below how this contract works!




https://user-images.githubusercontent.com/65470058/211827380-3a2470f5-2581-4845-ad3c-d4bfb66802c1.mp4

install.packages("e1071")
library(e1071)
data("iris")
head(iris)
tail(iris)
print(iris)
summary(iris)
index=sample(2,nrow(iris),prob=c(0.9,0.1),replace=TRUE)
set.seed(1234)
train=iris[index==1]
train
summary(train)
test=iris[index==2,]
test
summary(test)
model=naiveBayes (Species~ data=train)
pred=predict(model,test)
table(pred)
table(test$Species,pred)



install.packages("arules")
library(arules)
data(Groceries)
transactions <- Groceries
summary(transactions)
itemFrequencyPlot(transactions, support=0.1, cex.names=0.8)
itemFrequencyPlot(transactions, support=0.05, cex.names=0.8)
itemFrequencyPlot(transactions, topN=20)
rules <- apriori(Groceries, parameter = list(support = 0.009, confidence = 0.25, minlen = 2))
install.packages("arulesViz")
library("arulesViz") 
milk.rules <- sort(subset(rules, subset = rhs %in% "whole milk"), by = "confidence")
summary(milk.rules)
inspect(milk.rules)
