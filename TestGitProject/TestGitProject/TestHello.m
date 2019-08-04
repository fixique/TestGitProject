//
//  TestHello.m
//  TestGitProject
//
//  Created by Vladislav Krupenko on 04/08/2019.
//  Copyright © 2019 Surf. All rights reserved.
//

#import "TestHello.h"

@implementation TestHello

- (void)sayHello:(NSString *)param {
    NSLog(@"Hello, %@", param);
}

+ (void)some {
    TestHello *hello = [[TestHello alloc] init];
    [hello sayHello:@"Vlad"];

}

@end


