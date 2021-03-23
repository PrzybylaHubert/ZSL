#include <iostream>
#include <cstdlib>
#include <vector>

using namespace std;

int main(int argc, char** argv) {
		
	vector <int> wektor;
	for(int i=0; i<5; i++){
		wektor.push_back(rand()%100);
	}
	
	for(int i=0; i<wektor.size(); i++){
		cout<<wektor[i]<<endl;	
	}
	
	cout<<endl;
	
	wektor.erase(wektor.begin()+3);
		for(int i=0; i<wektor.size(); i++){
		cout<<wektor[i]<<endl;	
	}
		
	return 0;
}
